<?php require_once( "header.php"); ?>
<h2>Add Invoice</h2>

<form action="index.php" method="post">
      <input type="hidden" name="action" value="add_invoice">
    <input type="hidden" name="customer_id" value="<?php echo $customerID; ?>">
    <label for="invoice_name">Invoice Name</label>
    <br>
    <input type="text" name="invoice_name" id="invoice_name">
    <br>
    <br>
    <label for="invoice_date">Invoice Date</label>
    <br>
    <input type="text" name="invoice_date" id="invoice_date">
    <br>
    <br>
    <input type="submit" value="Submit">
    
    <input type="reset" value="Clear">
</form>




<?php require_once( "footer.php"); ?>