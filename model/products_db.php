    <?php
    
function getProducts(){
    global $db;
    $sql = "SELECT * from product";

   $statement = $db-> prepare($sql);
    
    $statement->execute();
    
    $result = $statement->fetchAll();
    
    $statement->closeCursor();
    
    return $result; 

}

function addProduct($productName, $productPrice){
    global $db;
    $sql = "INSERT INTO product
                 (productName, productPrice )
              VALUES
                 ('$productName', '$productPrice')";
    
    $statement = $db-> prepare($sql);
    
    $statement->execute();
    
    $result = $statement->fetchAll();
    
    $statement->closeCursor();
    
}

function deleteProduct($deleteID){
    global $db;
    $sql = "DELETE FROM product
              WHERE productID = '$deleteID'";
    
    $statement = $db-> prepare($sql);
    
    $statement->execute();
    
    $result = $statement->fetchAll();
    
    $statement->closeCursor();   
    
}
?>