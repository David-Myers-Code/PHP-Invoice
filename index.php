<?php

//debugging
//ini_set('display_errors', 'On');
//error_reporting(E_ALL);


//models
require("model/database.php");
require("model/customers_db.php");
require("model/invoice_db.php");
require("model/lineitems_db.php");
require("model/products_db.php");
require("model/payments_db.php");


/*----------------------------------------
Login and session---------------------*/


//get post action
if(isset($_POST['action'])){
        $action = $_POST['action'];
        

    }
//log out




//start session if not yet initialized
if(!$_SESSION){
session_start();
}

if($action=="logout"){
    require("view/logout.php");
    session_unset();
    session_destroy();
    exit();
    
   
}

//if no login
if(!isset($_SESSION['user_login'])  || !isset($_SESSION['user_password']  ) )  {
    require("view/login.php");
}

//if login works
if(isset($_SESSION['user_login'])  && isset($_SESSION['user_password']  )  && !isset($action)  ){
        $customers = getCustomers();
        include("view/customers.php");
}




/*-------------------------------------------
Customers-------------------------------------*/
if($action=="edit_customer_view"){
    $editID = $_POST['customer_id'];
    
    $editResults = editCustomerView($editID);
    include("view/editcustomer.php");   
    
   
}

if($action=="edit_customer"){
    $lastName = $_POST['lastName'];
    $firstName = $_POST['firstName'];
    $companyName = $_POST['companyName'];
    $customerID = $_POST['customer_id'];
    
    editCustomer($lastName, $firstName, $companyName, $customerID);
    $customers = getCustomers();
    include("view/customers.php");

    
    
}

if($action=="add_customer_view"){
    include("view/addcustomer.php");   
    
}

if($action=="delete_customer"){
    $deleteID = $_POST['customer_id'];
    deleteCustomer($deleteID);
    
    $customers = getCustomers();
    include("view/customers.php");
    
}

if($action=="add_customer"){
    $lastName = $_POST['lastName'];
    $firstName = $_POST['firstName'];
    $companyName = $_POST['companyName'];
    
    addCustomer($lastName, $firstName, $companyName);
    $customers = getCustomers();
    include("view/customers.php");
    
}



/*-----------------------------------------
Invoices------------------------------*/

if($action=="view_invoices"){
    $customerID = $_POST['customer_id'];
    $invoices = getInvoices($customerID);
    include("view/invoices.php");
}
if($action=="add_invoice_view"){
    
    $customerID = $_POST['customer_id'];
    include("view/addinvoice.php");
    
    
    
}

if($action=="add_invoice"){
    $customerID = $_POST['customer_id'];
    $invoiceName = $_POST['invoice_name'];
    $invoiceDate = $_POST['invoice_date'];
    addInvoice($customerID, $invoiceName, $invoiceDate);
    

     $invoices = getInvoices($customerID);
    include("view/invoices.php");
    
}

if($action=="delete_invoice"){
    
    $invoiceID = $_POST['invoice_id'];
    deleteInvoice($invoiceID);
    
     $invoices = getInvoices($customerID);
    include("view/invoices.php");
}



/*------------------------------------------
Invoice Line Items-------------------------*/
if($action=="view_line_items"){
    $invoiceID = $_POST['invoice_id'];
    $customerID = $_POST['customer_id'];
    $line_items = getProductsLineItem($invoiceID);
    //$line_items = getLineItems($invoiceID);
    include("view/lineitems.php");
}

if($action=="add_line_item"){
    
    
    
    $invoiceID = $_POST['invoice_id'];
    $productID = $_POST['selectProduct'];
    addtoline($invoiceID, $productID);
    
    $line_items = addtoline($invoiceID, $productID);
       
    $invoiceID = $_POST['invoice_id'];
    
    $line_items = getProductsLineItem($invoiceID);
    //$line_items = getLineItems($invoiceID);
    include("view/lineitems.php");
}

if($action=="add_line_item_view"){
    $invoiceID = $_POST['invoice_id'];
    
    $products = getProducts();
    
    include("view/addlineitem.php");
    
    }
if($action=="delete_line_item"){
    $deleteID = $_POST['delete_id'];
    deleteLineItem($deleteID);
    
    $invoiceID = $_POST['invoice_id'];
    $customerID = $_POST['customer_id'];
    $line_items = getProductsLineItem($invoiceID);
    //$line_items = getLineItems($invoiceID);
    include("view/lineitems.php");
}


/*----------------------------------------
Products--------------------------------*/

if($action=="view_products"){
    $products = getProducts();
    include("view/products.php");
}
if($action=="add_product_view"){
    
    include("view/addproduct.php");
}

if($action=="add_product"){
    $productName = $_POST['product_name'];
    $productPrice = $_POST['product_price'];
    addProduct($productName, $productPrice);
    
    $products = getProducts();
    include("view/products.php");
}

if($action=="delete_product"){
    $deleteID = $_POST['product_id'];
    deleteProduct($deleteID);
    
    $products = getProducts();
    include("view/products.php");
}

/*-----------------------------------------------
Payments----------------------------------------*/
if($action=="view_payments"){
   $paymentID = $_POST['customer_id'];
    $payments = viewPayments($paymentID);
   
    include("view/payments.php");
}

if($action=="delete_payment"){
    $deleteID = $_POST['payment_id'];
    deletePayment($deleteID);
    
    $paymentID = $_POST['customer_id'];
    $payments = viewPayments($paymentID);
     include("view/payments.php");
    
}
if($action=='add_payment'){
    $paymentAmount = $_POST['paymentAdd'];
    $customerID = $_POST['customer_id'];
    
    addPayment($paymentAmount, $customerID);
    
   $paymentID = $_POST['customer_id'];
    $payments = viewPayments($paymentID);
     include("view/payments.php");
     
    
}


?>