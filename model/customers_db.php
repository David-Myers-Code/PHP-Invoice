<?php
    
function getCustomers(){
    global $db;
    $sql = "SELECT * from customer";

   $statement = $db-> prepare($sql);
    
    $statement->execute();
    
    $result = $statement->fetchAll();
    
    $statement->closeCursor();
    
    return $result; 

}

function deleteCustomer($deleteID){
    global $db;
    $sql = "DELETE FROM customer
              WHERE customerID = '$deleteID'";
    
    $statement = $db-> prepare($sql);
    
    $statement->execute();
    
    $result = $statement->fetchAll();
    
    $statement->closeCursor();   
    
    
}

function addCustomer($lastName, $firstName, $companyName){
    global $db;
    $sql = "INSERT INTO customer
                 (lastName, firstName, companyName )
              VALUES
                 ('$lastName', '$firstName', '$companyName')";
    
    $statement = $db-> prepare($sql);
    
    $statement->execute();
    
    $result = $statement->fetchAll();
    
    $statement->closeCursor();
    
}
function editCustomerView($editID){
    global $db;
    $sql = "SELECT * from customer where customerID = '$editID'";

   $statement = $db-> prepare($sql);
    
    $statement->execute();
    
    $result = $statement->fetchAll();
    
    $statement->closeCursor();
    
    return $result; 

}

function editCustomer($lastName, $firstName, $companyName, $customerID){
     global $db;
    
    $sql = "UPDATE customer
    SET lastName = '$lastName' ,
    firstName = '$firstName' ,
    companyName = '$companyName'
    WHERE customerID = '$customerID' ";

   $statement = $db-> prepare($sql);
    
    $statement->execute();
    
    $result = $statement->fetchAll();
    
    $statement->closeCursor();
    
    return $result;
    
    
    
}
?>