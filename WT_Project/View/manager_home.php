<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location:login.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html>
<body>
<h2 align  ="center">Manager Dashboard</h2>
<h3 align  ="center"> Hii, <?php echo $_SESSION["username"];?></h3>
<br/><h4 align  ="center">Welcome to manager dashboard.</h4>
<br/>
 <h5 align  ="center">Do you want to <a href="logout.php">logout</a></h5>

</body>
</html>

<?php


?>   