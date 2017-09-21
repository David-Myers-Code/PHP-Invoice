<?php require_once( "header.php"); ?>
<h3>Add line item</h3>

<form action="index.php" method="post">
   <input type="hidden" name="action" value="add_line_item">
   <input type="hidden" name="invoice_id" value="<?php echo $invoiceID; ?>" >
    
      <select name="selectProduct">
       <?php foreach($products as $product) : ?>
       <option value="<?php echo $product[ 'productID'];?>">
        <?php echo $product[ 'productName'];?>
       </option>
       <?php endforeach; ?>
        
    </select>
    <input type="submit" value="Add">
    
    
</form>


<?php require_once( "footer.php"); ?>