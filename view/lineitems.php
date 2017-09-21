<?php require_once( "header.php"); ?>
<h3>Invoice Line Items/Products</h3>
<table>
    <tr>
        <th>Line Item ID</th>
        <th>Name</th>
        <th>Price</th>
        <th></th>

    </tr>
    <?php foreach($line_items as $line_item) : ?>
    <tr>
        <td><?php echo $line_item['invoicelineID']; ?></td>
            
            
            
        <td><?php echo $line_item['productName']; ?></td>
        <td><?php echo $line_item['productPrice']; ?></td>
        
         

        <td>
            <form action="index.php" method="post">
               <input type="hidden" name="delete_id" value="<?php echo $line_item['invoicelineID'];?>">
               <input type="hidden" name="invoice_id" value="<?php echo $invoiceID;?>" >
                <input type="hidden" name="action" value="delete_line_item">
                <input type="submit" value="Delete Line Item">
            </form>

        </td>
    </tr>
    <?php endforeach;?>
    <tr></tr>
    <tr></tr>
   <tr>
          <td>  
            <form action="index.php" method="post">
               <input type="hidden" name="invoice_id" value="<?php echo $invoiceID; ?>">
                <input type="hidden" name="action" value="add_line_item_view">
                <input type="submit" value="Add Line item">
            </form>
       </td>
    </tr>

</table>
<br>
           <br>
           <br>
            <form action="index.php" method="post">
                <input type="hidden" name="customer_id" value="<?php echo $customerID;?>">
                <input type="hidden" name="action" value="view_invoices">
                <input type="submit" value="View Invoices">
            </form>
<br>
<br>
<form action="index.php" method="post">
    <input type="hidden" name="action" value="view_products">
    <input type="submit" value="View/Edit Products">
</form>




<?php require_once( "footer.php"); ?>