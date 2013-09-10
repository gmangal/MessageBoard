<?php

    include("connect.php");

    ensure_csrf_tokens_match();

    if (empty($_POST['password']) || empty($_POST['username']))
    {
        die("Please fill out all fields.");
    }

    if ($_POST['password'] != $_POST['password_rt'])
    {
        die("Passwords don't match.");
    }

    $check_for_user_query = $db->prepare("
        SELECT COUNT(`username`) FROM `users`
        WHERE `username` = :username
    ");

    $check_for_user_query->execute(
        array(
            ':username' => $_POST['username']
        )
    );

    if ($check_for_user_query->fetchColumn(0) > 0)
    {
        die("That username is already taken.");
    }

    $salt = generate_salt(32);
    $passhash = crypt($_POST['password'], $salt);

    $insert_user_query = $db->prepare("
        INSERT INTO `users`
            (`username`, `password`, `salt`, `admin`)
        VALUES
            (:username, :password, :salt, 0)
    ");

    $insert_user_query->execute(array(
        ':username' => $_POST['username'],
        ':password' => $passhash,
        ':salt' => $salt
    ));

    header("Location: index.php");

?>
