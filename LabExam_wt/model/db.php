<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "cv";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 

 function InsertEmployee($conn,$table,$username,$password,$full_name,$mobile_no,$dob,$uni,$degree,$major,$results,$pass_year)
 {
$result = $conn->query("INSERT INTO $table (username, password, full_name, mobile_no, dob, uni,degree,major,results,pass_year) 
		VALUES ('$username','$password','$full_name','$mobile_no','$dob','$uni','$degree','$major','$results','$pass_year')");
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