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

    $_SESSION['topicid'] = $_GET['topicid'];

    $get_op_query = $db->prepare("
        SELECT * FROM `posts`
        WHERE `topicid` = :topicid
        AND `OP` = 1
        ;
    ");

    $get_op_query->execute(array(
        ':topicid' => $_GET['topicid']
    ));

    $op = $get_op_query->fetch();

    $smarty->assign(topicname, $_GET['topicname']);
    $smarty->display('topicname.tpl');

    $smarty->assign(username, $op['username']);
    $smarty->assign(message, $op['message']);
    $smarty->assign(postid, $op['id']);
    $smarty->display('originalpost.tpl');
    if ($_SESSION['username'] == $op['username'])
    {
        $smarty->display('editpostbutton.tpl');
    }
    $smarty->display('endtablerow.tpl');
    $smarty->display('tableend.tpl');

    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $get_posts_query = $db->prepare("
        SELECT * FROM `posts`
        WHERE `topicid` = :topicid
        AND `OP` != 1
        ORDER BY posts.id DESC
        LIMIT :limitstart, 10
        ;
    ");

    $get_posts_query->execute(array(
        ':topicid' => $_GET['topicid'],
        ':limitstart' => $limitstart
    ));

    $posts = $get_posts_query->fetchAll();

    $smarty->display('posttablestart.tpl');

    foreach ($posts as $key => $value) {
        $smarty->assign(username, $posts[$key]['username']);
        $smarty->assign(message, $posts[$key]['message']);
        $smarty->assign(postid, $posts[$key]['id']);
        $smarty->display('post.tpl');
        if ($_SESSION['username'] == $posts[$key]['username'])
        {
            $smarty->display('editpostbutton.tpl');
        }
        $smarty->display('endtablerow.tpl');
    }
    $smarty->display('tableend.tpl');

    $baseurl = 'topic.php?topicid=' . $_GET['topicid'] . '&topicname=' . $_GET['topicname'];
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
        $smarty->display('reply.tpl');
    }

?>
