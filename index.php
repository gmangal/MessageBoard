<?php
    require_once('/Users/Gaurav/Sites/finalproject/Smarty-3.1.13/libs/Smarty.class.php');
    $smarty = new Smarty();

    include("connect.php");

    if (isset($_GET['page']))
    {
        $limitstart = $_GET['page'] * 10 - 10;
    } 
    else
    {
        $limitstart = 0;
    }

    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $get_categories_query = $db->prepare("
        SELECT `categories`.`id`, `categories`.`name`,
            COUNT(DISTINCT topics.id) as topics,
            COUNT(DISTINCT posts.id) as posts
        FROM `categories`
        LEFT JOIN `topics` ON `categories`.`id` = `topics`.`categoryid`
        LEFT JOIN `posts` ON `topics`.`id` = `posts`.`topicid`
        GROUP BY categories.id
        ORDER BY categories.id DESC
        LIMIT :limitstart , 10
        ;
    ");

    $get_categories_query->execute(array(
        ':limitstart' => $limitstart
    ));
    $categories = $get_categories_query->fetchAll();

    $smarty->assign(title, "Message Board");
    $smarty->display('start.tpl');
    $smarty->display('bannerstart.tpl');
    if ($_SESSION['username'] != null) {
        $smarty->assign(user, $_SESSION['username']);
        $smarty->display('bannerloggedin.tpl');
    } else {
        $smarty->assign(canary, $_SESSION['canary']);
        $smarty->display('bannerlogin.tpl');
    }

    $smarty->display('categorystart.tpl');
    foreach ($categories as $key => $value) {
        $catid = $categories[$key]['id'];
        $catname = $categories[$key]['name'];
        $smarty->assign(url, "category.php?catid=" . $catid);
        $smarty->assign(categoryname, $catname);
        $smarty->assign(categorythreads, $categories[$key]['topics']);
        $smarty->assign(categoryposts, $categories[$key]['posts']);
        $smarty->display('category.tpl');
    }
    $smarty->display('categoryend.tpl');

    if (isset($_GET['page']))
    {
        if ($_GET['page'] == 2)
            $smarty->assign(url, 'index.php');
        else
        {
            $prevpage = $_GET['page'] - 1;
            $smarty->assign(url, 'index.php?page=' . $prevpage);
        }
        $smarty->assign(buttonvalue, 'Previous Page');
        $smarty->display('changepage.tpl');

        $newpage = $_GET['page'] + 1;
        $smarty->assign(url, 'index.php?page=' . $newpage);
        $smarty->assign(buttonvalue, 'Next Page');
        $smarty->display('changepage.tpl');
    }
    else
    {
        $newpage = 2;
        $smarty->assign(url, 'index.php?page=' . $newpage);
        $smarty->assign(buttonvalue, 'Next Page');
        $smarty->display('changepage.tpl');
    }

    if ($_SESSION['admin'] == 1) 
    {
        $smarty->assign(canary, $_SESSION['canary']);
        $smarty->display('createcategory.tpl');
    }

?>
