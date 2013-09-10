<?php

    require('connect.php');

    ensure_csrf_tokens_match();

    if (empty($_POST['categoryname']))
    {
        die("Please fill out field");
    }

    $insert_query = $db->prepare("
        INSERT INTO `categories`
            (`id`, `name`)
            VALUES
            (null, :name)
    ");

    $insert_query->execute(array(
        ':name' => $_POST['categoryname']
    ));

    header('Location: index.php');

?>
