<?php

session_start(); 

 $error="";
// store session data
if (isset($_POST['submit'])) 
{
    if (empty($_POST['username']) || empty($_POST['password'])) 
        {
            $error = "Username or Password is invalid";
        }
    else if 
    ($_POST['username']=="rupa" && $_POST['password']=="123")
    {
        header("location: view/adminProfile.php");
        $_SESSION["username"] = $_POST['username'];
        $_SESSION["password"] = $_POST['password'];
    }
    else if 
    ($_POST['username']=="xyz" && $_POST['password']=="789")
    {
        header("location: view/employeeProfile.php");
        $_SESSION["username"] = $_POST['username'];
        $_SESSION["password"] = $_POST['password'];
    }
else
    {
    $error = "Username or password can not be authenticated";
    }
}    
?>