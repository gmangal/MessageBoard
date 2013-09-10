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
    $get_topics_query = $db->prepare("
        SELECT `topics`.`id`, `topics`.`name`,
            COUNT(DISTINCT posts.id) as posts
        FROM `topics`
        LEFT JOIN `posts` ON `topics`.`id` = `posts`.`topicid`
        WHERE `categoryid` = :catid
        GROUP BY topics.id
        ORDER BY topics.id DESC
        LIMIT :limitstart , 10
        ;
    ");

    $get_topics_query->execute(array(
        ':catid' => $_GET['catid'],
        ':limitstart' => $limitstart
    ));

    $topics = $get_topics_query->fetchAll();

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

    $smarty->display('topicstart.tpl');
    foreach ($topics as $key => $value) {
        $topicid = $topics[$key]['id'];
        $topicname = $topics[$key]['name'];
        $smarty->assign(url, "topic.php?topicid=" . $topicid . "&topicname=" . $topicname);
        $smarty->assign(topicname, $topicname);
        $smarty->assign(topicposts, $topics[$key]['posts']);
        $smarty->display('topic.tpl');
    }
    $smarty->display('topicend.tpl');

    $_SESSION['catid'] = $_GET['catid'];

    $baseurl = 'category.php?catid=' . $_GET['catid'];
    if (isset($_GET['page']))
    {
        if ($_GET['page'] == 2)
            $smarty->assign(url, $baseurl);
        else
        {
            $prevpage = $_GET['page'] - 1;
            $smarty->assign(url, $baseurl . '&page=' . $prevpage);
        }
        $smarty->assign(buttonvalue, 'Previous Page');
        $smarty->display('changepage.tpl');

        $newpage = $_GET['page'] + 1;
        $smarty->assign(url, $baseurl . '&page=' . $newpage);
        $smarty->assign(buttonvalue, 'Next Page');
        $smarty->display('changepage.tpl');
    }
    else
    {
        $newpage = 2;
        $smarty->assign(url, $baseurl . '&page=' . $newpage);
        $smarty->assign(buttonvalue, 'Next Page');
        $smarty->display('changepage.tpl');
    }

    if (isset($_SESSION['username']))
    {
        $smarty->assign(canary, $_SESSION['canary']);
        $smarty->display('createtopicbutton.tpl');
    }

?>
