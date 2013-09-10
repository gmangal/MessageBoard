<?php

    include("connect.php");

    $update_post_query = $db->prepare("
        UPDATE `posts`
        SET `message` = :message
        WHERE `id` = :postid;
    ");

    $update_post_query->execute(array(
        ':message' => $_POST['message'],
        ':postid' => $_POST['postid']
    ));

    $select_updated_post = $db->prepare("
        SELECT `message`
        FROM `posts`
        WHERE `id` = :postid;
    ");

    $select_updated_post->execute(array(
        ':postid' => $_POST['postid']
    ));

    $updated_message = $select_updated_post->fetch();
    echo JSON_encode($updated_message); 


?>
