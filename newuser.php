<?php

    require_once('/Users/Gaurav/Sites/finalproject/Smarty-3.1.13/libs/Smarty.class.php');
    $smarty = new Smarty();

    include("connect.php");

    $smarty->assign(title, "Message Board");
    $smarty->display('start.tpl');
    $smarty->display('bannerstart.tpl');

    $smarty->assign(canary, $_SESSION['canary']);
    $smarty->display('newuser.tpl');

?>
