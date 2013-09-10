<?php

    require('connect.php');

    ensure_csrf_tokens_match();

    $user_exists = $db->prepare("
        SELECT `username` FROM `users`
        WHERE `username` = :username
    ");

    $user_exists->execute(
        array(
            ':username' => $_POST['username']
        )    
    );

    if ($user_exists->fetchColumn(0) == null)
    {
        echo("User credentials not valid");
    }
    
    $check_query = $db->prepare("
        SELECT * FROM `users`
        WHERE `username` = :username
    ");

    $check_query->execute(
        array(
            ':username' => $_POST['username']
        )
    );

    $result = $check_query->fetchAll();
    $actualPass = $result[0]['password'];
    $salt = $result[0]['salt'];
    $admin = $result[0]['admin'];

    $input_hashed_pass = crypt($_POST['password'], $salt);

    if ($input_hashed_pass == $actualPass)
    {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['admin'] = $admin;
        header("Location: index.php");
    }

    echo "Login failed";

?>
