<?php include "header.inc"; ?>
<h1>Login</h1>

<form method="post" action="process.php">
    <label for="username">Username:</label>
    <input type="text" name="username" required="required"><br>

    <label for="password">Password:</label>
    <input type="password" name="password" required="required"><br>

    <input type="hidden" name="token" value="e106009537">
    <input type="submit" value="Login">

</form>
<?php include "footer.inc"; ?>