<?php
    
 

    $username = $_POST['username'];
    $password = $_POST['password'];
    
if ($username == "root" && $password == "password"){
    session_start();
       $_SESSION['user_login'] = $username;
        $_SESSION['user_password'] = $password;
    

    require("index.php");    
    
    }


    else{
    
    require("view/accessdenied.php"); 
       
    }

?>