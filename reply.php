<?php

    require('connect.php');
    
    ensure_csrf_tokens_match();

    $insert_post = $db->prepare("
        INSERT INTO `posts`
        (`id`, `topicid`, `OP`, `username`, `message`)
        VALUES
        (null, :topicid, 0, :username, :message);
    ");

    $insert_post->execute(array(
        ':topicid' => $_SESSION['topicid'],
        ':username' => $_SESSION['username'],
        ':message' => $_POST['message']
    ));

    $get_post = $db->prepare("
        SELECT * FROM `posts` ORDER BY `id` DESC;
    ");

    $get_post->execute();
    $post = $get_post->fetch();
    echo JSON_encode($post);


?>
