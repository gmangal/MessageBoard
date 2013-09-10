<form method="POST" action="createTopic.php" name="topicform">
    <label for="topicname">Title</label>
    <input type="text" id="topicname" name="topicname" required><br>
    <label for="OP">Message</label>
    <textarea rows="4" cols="40" id="OP" name="OP"></textarea></br>
    <input type="hidden" name="canary" value="{$canary}" />
    <input type="submit" value="Submit">
</form>
