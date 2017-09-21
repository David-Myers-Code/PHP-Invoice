<?php require_once( "header.php"); ?>
<h2>Invoices</h2>

<table>
    <tr>
        <th>Invoice ID</th>
        <th>Invoice Name</th>
        <!--<th>Invoice Total</th>-->
        <th>Invoice Date</th>
        <th></th>
        <th></th>
    

    </tr>
    <?php foreach($invoices as $invoice) : ?>
    <tr>
        <td><?php echo $invoice['invoiceID'] ?></td>
        <td><?php echo $invoice['invoiceName'] ?></td>
         <!--<td><?php // echo $invoice['invoiceTotal'] ?></td>-->
        <td><?php echo $invoice['invoiceDate'] ?></td>        
        
           <td>      
            <form action="index.php" method="post">
               <input type="hidden" name="invoice_id" value="<?php echo $invoice['invoiceID'];?>">
               <input type="hidden" name="customer_id" value="<?php echo $invoice['customerID'];?>">
                <input type="hidden" name="action" value="view_line_items">
                <input type="submit" value="View/Edit Line Items">
            </form>
        </td>
        


        <td>
            <form action="index.php" method="post">
               <input type="hidden" name="invoice_id" value="<?php echo $invoice['invoiceID'];?>">
                <input type="hidden" name="action" value="delete_invoice">
                <input type="submit" value="Delete Invoice">
            </form>

        </td>
    </tr>
  <?php endforeach ?>

</table>
<br>
<br>
<br>
<form action="index.php" method="post">
    <input type="hidden" name="action" value="add_invoice_view">
    <input type="hidden" name="customer_id" value="<?php echo $customerID; ?>">
    <input type="submit" value="Add Invoice">
</form>




<?php require_once( "footer.php"); ?>