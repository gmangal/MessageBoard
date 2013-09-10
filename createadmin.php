<?php

    include('connect.php');

    $salt = generate_salt(32);
    $passhash = crypt('admin', $salt);

    $insert = $db->prepare("
        INSERT INTO `users`
            (`username`, `password`, `salt`, `admin`)
        VALUES
            (:username, :password, :salt, 1)
    ");

    $insert->execute(array(
        ':username' => 'admin',
        ':password' => $passhash,
        ':salt' => $salt
    ));


?>
