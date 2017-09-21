<?php require_once( "header.php"); ?>
<h2>Login:  </h2>
<form action="session.php" method="post" id="login">
    <br>
    <!--<input type="hidden" name="action" value="login">-->
    <label for="username">Username: </label>
    <br>
    <input type="text" name="username" id="username" placeholder="username">
    <br>
    <label for="password">Password: </label>
    <br>
    <input type="password" name="password" id="password" placeholder="password">
    <br>
    <br>
    <input type="submit" value="login">
    <br>

</form>

<p>(username: root; password: password;)</p>


<?php require_once( "footer.php"); ?>