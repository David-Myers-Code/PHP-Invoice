<?php
    function getLineItems($invoiceID){
    global $db;
    $sql = "SELECT * from invoiceline WHERE invoiceID = '$invoiceID'";

   $statement = $db-> prepare($sql);
    
    $statement->execute();
    
    $result = $statement->fetchAll();
    
    $statement->closeCursor();
    
    return $result; 

}

function getProductsLineItem($invoiceID){
        global $db;
    $sql = "SELECT * from invoiceline  
    INNER JOIN product
   ON invoiceline.productID = product.productID
   WHERE invoiceline.invoiceID = '$invoiceID'";

   $statement = $db-> prepare($sql);
    
    $statement->execute();
    
    $result = $statement->fetchAll();
    
    $statement->closeCursor();
    
    return $result; 
    
}

function deleteLineItem($deleteID){
    
        global $db;
    $sql = "DELETE FROM invoiceline
              WHERE invoicelineID = '$deleteID'";
    
    $statement = $db-> prepare($sql);
    
    $statement->execute();
    
    $result = $statement->fetchAll();
    
    $statement->closeCursor(); 





}


function addtoline($invoiceID, $productID){
    
            global $db;
     $sql = "INSERT INTO invoiceline
                 (invoiceID, productID )
              VALUES
                 ('$invoiceID', '$productID')";
    
    $statement = $db-> prepare($sql);
    
    $statement->execute();
    
    $result = $statement->fetchAll();
    
    $statement->closeCursor(); 
    
    
    
}

?>