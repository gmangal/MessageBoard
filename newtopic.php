<?php

    require_once('/Users/Gaurav/Sites/finalproject/Smarty-3.1.13/libs/Smarty.class.php');
    $smarty = new Smarty();

    include("connect.php");

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

    $smarty->assign(canary, $_SESSION['canary']);
    $smarty->display('newtopic.tpl');

?>
