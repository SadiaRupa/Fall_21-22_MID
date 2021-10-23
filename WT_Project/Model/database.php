<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "wt_project";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 function CheckUser($conn,$table,$username,$password)
 {
 $result = $conn->query("SELECT * FROM $table WHERE username='$username' AND password='$password'");
 return $result;
 }

 function InsertUser($conn,$table,$name,$username,$email,$password)
 {
$result = $conn->query("INSERT INTO $table (name, username, email, password) VALUES ('$name','$username', '$email', 'password')");
return $result;
 }

 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }

function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>