<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../control/logout.php"); // Redirecting To Home Page
}
?>

<!DOCTYPE html>
<html>
<body>
<h1 align = "center">Manager Dashboard</h2>
<h2 align = "center">Hii, <?php echo $_SESSION["username"];?></h2>
<br/><h2>Welcome to home page.</h2>


<h3><a href="adminProfile.php"> Admin Profile</a></h3><br/>
<h3><a href="employeeProfile.php">Employee Profile</a></h3>

</body>
</html>

<?php


?>   