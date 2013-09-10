<form method="POST" action="adduser.php">
    <label for="username">Username</label>
    <input type="text" required name="username" id="username" />
    <br>
    <label for="password">Password</label>
    <input type="password" required name="password" id=password"
        oninput="check_password()" />
    <br>
    <label for="password_rt">Password(repeat)</label>
    <input type="password" required name="password_rt" id="password_rt"
        oninput="check_passwords()" />
    <br>
    <input type="hidden" name="canary" value="{$canary}" />
    <input type="submit" value="Create Account" />
</form>
