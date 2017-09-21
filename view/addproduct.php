<?php require_once( "header.php"); ?>
<h2>Add Product</h2>

<form action="index.php" method="post">
      <input type="hidden" name="action" value="add_product">
    <label for="product_name">Product Name: </label>
    <br>
    <input type="text" name="product_name" id="product_name">
    <br>
    <br>
    <label for="product_price">Product Price: </label>
    <br>
    <input type="text" name="product_price" id="product_price">
    <br>
    <br>
    <br>
    <br>

    <input type="submit" value="Submit">
    <input type="reset" value="Clear">
</form>



<?php require_once( "footer.php"); ?>