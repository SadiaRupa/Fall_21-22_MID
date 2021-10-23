<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: view/home.php"); // Redirecting To Home Page
}
?>

<!DOCTYPE html>
<html>
<body>
<h1>Admin Page</h1>
<h2>Hii, <?php echo $_SESSION["username"];?></h2><br/>
<h2>Welcome to Admin Page.</h2>

<h4>Go to  <a href="../view/home.php">Home</a></h4>
<h4>Do you want to <a href="../control/logout.php">Logout</a></h4>

</body>
</html>  