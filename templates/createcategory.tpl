<form method="POST" action="createCategory.php" name="categoryform">
    <input type="text" name="categoryname" required />
    <input type="hidden" name="canary" value="{$canary}" />
    <input type="submit" value="Create Category" />
</form>
