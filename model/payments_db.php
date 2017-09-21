<?php

function viewPayments($paymentID){
    global $db;
    $sql = "SELECT * from payment WHERE customerID = '$paymentID'";

   $statement = $db-> prepare($sql);
    
    $statement->execute();
    
    $result = $statement->fetchAll();
    
    $statement->closeCursor();
    
    return $result; 


}
function deletePayment($deleteID){
    global $db;
    $sql = "DELETE FROM payment
              WHERE paymentID = '$deleteID'";
    
    $statement = $db-> prepare($sql);
    
    $statement->execute();
    
    $result = $statement->fetchAll();
    
    $statement->closeCursor();   
    
}

function addPayment($paymentAmount, $customerID){
    global $db;
    $sql = "INSERT INTO payment
                 (customerID, paymentAmount )
              VALUES
                 ('$customerID', '$paymentAmount')";
    
    $statement = $db-> prepare($sql);
    
    $statement->execute();
    
    $result = $statement->fetchAll();
    
    $statement->closeCursor();

}


?>