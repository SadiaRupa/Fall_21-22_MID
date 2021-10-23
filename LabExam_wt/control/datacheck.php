<?php
include('../model/db.php');

session_start(); 
 $error="";
// store session data
if (isset($_POST['SUBMIT'])) {
if (empty($_POST['username']) || empty($_POST['password']) ||empty($_POST['full_name']) || empty($_POST['mobile_no']) || empty($_POST['dob']) 
	|| empty($_POST['uni']) || empty($_POST['degree']) || empty($_POST['major']) || empty($_POST['results']) || empty($_POST['pass_year']) ) 
	{
	$error = "Username or Password is invalid";
	}
else
{
$username=$_POST['username'];
$password=$_POST['password'];
$full_name=$_POST['full_name'];
$mobile_no=$_POST['mobile_no'];
$dob=$_POST['dob'];
$uni=$_POST['uni'];
$degree=$_POST['degree'];
$major=$_POST['major'];
$results=$_POST['results'];
$pass_year=$_POST['pass_year'];


$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->InsertEmployee($conobj,"employee",$username,$password,$full_name,$mobile_no,$dob,$uni,$degree,$major,$reults,$pass_year);

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