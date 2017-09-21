<?php require_once( "header.php"); ?>
<h2>Add new customer: </h2>
<form action="index.php" method="post">
   <input type="hidden" name="action" value="add_customer">
    <label for="lastName">Last Name: </label>
    <br>
    <input type="text" name="lastName" id="lastName">
    <br>

    <label for="firstName">First Name: </label>
    <br>
    <input type="text" name="firstName" id="firstName">
    <br>

    <label for="companyName">Company Name: </label>
    <br>
    <input type="text" name="companyName" id="companyName">
    <br>
    <br>
    <br>

    <input type="submit" value="Submit">
    <input type="reset" value="Clear">
</form>



<?php require_once( "footer.php"); ?>