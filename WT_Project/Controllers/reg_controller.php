<?php
include('../Model/database.php');


 $error="";
// store session data
if (isset($_POST['submit'])) {
if (empty($_POST['name']) || empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
$name=$_POST['name'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->InsertUser($conobj,"user",$name,$username,$email,$password);

if ($userQuery===TRUE) 
{
$error = "Data inserted";
}
else {
$error = "Data not inserted";
}
$connection->CloseCon($conobj);

}
}
?>