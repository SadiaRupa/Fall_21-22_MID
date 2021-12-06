Skip to content
Why GitHub? 
Team
Enterprise
Explore 
Marketplace
Pricing 
Search
Sign in
Sign up
Riyad186
/
Fall_2021
Public
00
Code
Issues
Pull requests
Actions
Projects
Wiki
Security
Insights
Fall_2021/FTLabExam/model/database.php /
@Riyad186
Riyad186 RIyad
Latest commit ddfcd34 19 minutes ago
 History
 1 contributor
51 lines (42 sloc)  1.01 KB
   
<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "mydb";

 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
 function CheckUser($conn,$table,$username,$password)
 {
 $result = $conn->query("SELECT * FROM $table WHERE username='$username' AND password='$password'");
 return $result;
 }

 function SearchDesig($conn,$table,$designation)
 {
$result = $conn->query("SELECT * FROM  $table WHERE Designation='$designation'");
 return $result;
 }

 function SearchName($conn,$table,$name)
 {
    $result = $conn->query("SELECT * FROM  $table WHERE Name='$name'");
    return $result;
 }

 function SearchbyInterest($conn,$table,$interest)
 {
    $result = $conn->query("SELECT * FROM  $table WHERE Name='$interest'");
    return $result;
 }

 function ShowAll ($conn,$table)
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