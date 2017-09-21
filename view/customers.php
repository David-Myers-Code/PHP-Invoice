<?php require_once( "header.php"); ?>
<h2>Customers</h2>
<table>
    <tr>

        <th>Last Name</th>
        <th>First Name</th>
        <th>Company</th>

        <th></th>
        <!--payments-->
        <th></th>
        <!--Add invoice-->
        <th></th>
        <!--Edit Customer-->
        <th></th>
        <!--Delete Customer-->
    </tr>
    <?php foreach($customers as $customer): ?>
    <tr>
        <td>
            <?php echo $customer[ 'lastName'];?>
        </td>
        <td>
            <?php echo $customer[ 'firstName'];?>
        </td>
        <td>
            <?php echo $customer[ 'companyName'];?>
        </td>

        <td>
            <form action="index.php" method="post">
                <input type="hidden" name="customer_id" value="<?php echo $customer['customerID'];?>">
                <input type="hidden" name="action" value="view_payments">
                <input type="submit" value="View/Add Payments">
            </form>
        </td>
        <td>
            <form action="index.php" method="post">
                <input type="hidden" name="customer_id" value="<?php echo $customer['customerID'];?>">
                <input type="hidden" name="action" value="view_invoices">
                <input type="submit" value="View Invoices">
            </form>
        </td>
        <td>
            <form action="index.php" method="post">
                <input type="hidden" name="customer_id" value="<?php echo $customer['customerID'];?>">
                <input type="hidden" name="action" value="edit_customer_view">
                <input type="submit" value="Edit Customer">
            </form>
        </td>
        <td>
            <form action="index.php" method="post">
                <input type="hidden" name="action" value="delete_customer">
                <input type="hidden" name="customer_id" value="<?php echo $customer['customerID'];?>">
                <input type="submit" value="Delete Customer">
            </form>
        </td>
    </tr>
    <?php endforeach;?>

</table>
<br>
<br>
<br>
<form action="index.php" method="post">
    <input type="hidden" name="action" value="add_customer_view">
    <input type="submit" value="Add Customer">
</form>
<br>
<form action="index.php" method="post">
    <input type="hidden" name="action" value="view_products">
    <input type="submit" value="View/Edit Products">
</form>
<br>
<br>
<br>
<form action="index.php" method="post">
    <input type="hidden" name="action" value="logout">
    <input type="submit" value="Log Out">
</form>

<?php require_once( "footer.php"); ?>