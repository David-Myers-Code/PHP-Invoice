<?php require_once( "header.php"); ?>
<h2>Edit Customer: </h2>

<?php foreach($editResults as $editResult): ?>


  <form action="index.php" method="post">
  
   <input type="hidden" name="action" value="edit_customer">
   <input type="hidden" name="customer_id" value="<?php echo $editResult['customerID'];?>">
    <label for="lastName">Last Name: </label>
    <br>
    <input type="text" name="lastName" id="lastName"
    value="<?php echo $editResult['lastName'];?>">
    <br>

    <label for="firstName">First Name: </label>
    <br>
    <input type="text" name="firstName" id="firstName" value="<?php echo $editResult['firstName'];?>">
    <br>

    <label for="companyName">Company Name: </label>
    <br>
    <input type="text" name="companyName" id="companyName" value="<?php echo $editResult['companyName'];?>">
    <br>
    <br>
    <br>
   
    <input type="submit" value="Submit">
    
</form>

<?php endforeach;?>


<?php require_once( "footer.php"); ?>