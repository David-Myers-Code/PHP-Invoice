<?php require_once( "header.php"); ?>
<h2>Edit Products</h2>

<table>
    <tr>
        <th>Product ID</th>
        
        <th>Product Name</th>

        <th>Product Price</th>

        <th></th>

    </tr>
    <?php foreach($products as $product) : ?>
    <tr>
        <td>
            <?php echo $product[ 'productID'];?>
        </td>

        <td>
            <?php echo $product[ 'productName'];?>
        </td>
                <td>
            <?php echo $product[ 'productPrice'];?>
        </td>


        <td>
            <form action="index.php" method="post">
                <input type="hidden" name="product_id" value="<?php echo $product['productID'];?>">
                <input type="hidden" name="action" value="delete_product">
                <input type="submit" value="Delete Product">
            </form>

        </td>
    </tr>
    <?php endforeach ?>



</table>

<br>
<form action="index.php" method="post">
    <input type="hidden" name="action" value="add_product_view">
    <input type="submit" value="Add Product">
</form>



<?php require_once( "footer.php"); ?>