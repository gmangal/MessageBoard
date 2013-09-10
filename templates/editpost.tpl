<form method="POST" action="alterpost.php" name="editpostform">
    <input type="hidden" name="canary" value="{$canary}" />
    <label for="message">Message</label>
    <textarea rows="4" cols="40" id="message" name="message">{$message}</textarea>
    <input type="submit" value="Submit" />
</form>
