<?php

function getInvoices($customerID){
    global $db;
    $sql = "SELECT * from invoice WHERE customerID = '$customerID'";

   $statement = $db-> prepare($sql);
    
    $statement->execute();
    
    $result = $statement->fetchAll();
    
    $statement->closeCursor();
    
    return $result; 

}

function deleteInvoice($invoiceID){
    global $db;
    $sql = "DELETE FROM invoice
              WHERE invoiceID = '$invoiceID'";
    
    $statement = $db-> prepare($sql);
    
    $statement->execute();
    
    $result = $statement->fetchAll();
    
    $statement->closeCursor();

}

function addInvoice($customerID, $invoiceName, $invoiceDate){
    global $db;
    $sql = "INSERT INTO invoice
                 (customerID, invoiceName, invoiceTotal, invoiceDate)
              VALUES
                 ('$customerID', '$invoiceName', NULL, '$invoiceDate')";
    
    $statement = $db-> prepare($sql);
    
    $statement->execute();
    
    $result = $statement->fetchAll();
    
    $statement->closeCursor();
    
}

?>