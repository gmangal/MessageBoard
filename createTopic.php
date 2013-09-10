<?php

    require('connect.php');

    ensure_csrf_tokens_match();

    if (empty($_POST['topicname']))
    {
        die("Please fill out field");
    }

    $insert_topic_query = $db->prepare("
        INSERT INTO `topics`
            (`id`, `categoryid`, `name`)
            VALUES
            (null, :catid, :name)
    ");

    $insert_topic_query->execute(array(
        ':name' => $_POST['topicname'],
        ':catid' => $_SESSION['catid']
    ));

    $get_topic_id_query = $db->prepare("
        SELECT MAX(id) AS id FROM `topics`
    ");
    $get_topic_id_query->execute();
    $topicid = $get_topic_id_query->fetchColumn(0);

    $insert_op_query = $db->prepare("
        INSERT INTO `posts`
            (`id`, `topicid`, `OP`, `username`, `message`)
            VALUES
            (null, :topicid, 1, :username, :message)
    ");

    $insert_op_query->execute(array(
        ':topicid' => $topicid,
        ':username' => $_SESSION['username'],
        ':message' => $_POST['OP']
    ));

    header('Location: category.php?catid=' . $_SESSION['catid']);

?>
