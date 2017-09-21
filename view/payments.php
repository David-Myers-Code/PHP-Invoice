<?php require_once( "header.php"); ?>
<h2>Payments:</h2>
<h3>Customer:</h3>

<table>
    <tr>
        <th>Payment Amount</th>
        <th>Payment Date</th>
        <th></th>
      
        
    </tr>
    <?php foreach($payments as $payment): ?>
    <tr>
        <td><?php echo $payment['paymentAmount']; ?></td>
        <td><?php echo $payment['paymentDate']; ?></td>
       <td>
            <form action="index.php" method="post">
               <input type="hidden" name="payment_id" value="<?php echo $payment['paymentID'];?>">
                <input type="hidden" name="action" value="delete_payment">
                                <input type="hidden" name="customer_id" value="<?php echo $payment['customerID'];?>">
                <input type="submit" value="Delete Payment">
            </form>
        </td>
        
    </tr>
          <?php endforeach; ?>
           <tr>
           <td>Add payment</td>
           <td colspan="2">
            <form action="index.php" method="post">
    <input type="hidden" name="action" value="add_payment">
    <input type="hidden" name="customer_id" value="<?php echo $paymentID;?>">
    <label for="paymentAdd">Payment Amount: </label>
    <input type="text" name="paymentAdd">
    <input type="submit" value="Submit">
    <input type="reset" value="Clear">
</form>
        </td>
    </tr>
    
    
</table>

</form>





<?php require_once( "footer.php"); ?>