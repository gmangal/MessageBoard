<?php

    session_name("mboard");
    session_start();

    $db = new PDO(
        'mysql:host=localhost;
        dbname=messageboard',
        'root',
        ''
    );

    function generate_salt($length)
    {
        $characters = 'ABCDEFGHJIKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890~!@#$%^&*_+=-`';
        $lastchar = strlen($characters) - 1;

        $salt = '';
        for ($i = 0; $i < $length; $i++)
        {
            $index = mt_rand(0, $lastchar);
            $character = $characters{$index};
            $salt .= $character;
        }
        return $salt;
    }

    function ensure_csrf_token_exists($force = false)
    {
        if (!isset($_SESSION['canary']) || $force)
        {
            // Base64 encode the canary for the current session, this
            // makes sure that the canary not composed of special
            // characters while still making it virtually impossible to forge
            $_SESSION['canary'] = base64_encode(generate_salt(64));
        }

    }

    // CSRF prevention: see if the submitted form had a CSRF token!
    function ensure_csrf_tokens_match()
    {
        if ($_POST['canary'] != $_SESSION['canary'])
        {
            die('Illegitimate request!');
        }
    }

    ensure_csrf_token_exists();

?>
