<?php
include('../Controllers/user_controller.php');

if(isset($_SESSION['username'])){
header("location: manager_home.php");
}
?>
<!DOCTYPE html>
<html>
<body>

<h2 align = "center">Login</h2>

<form align = "center" action="" method="post">
    <input type="text" name="username" placeholder="Enter your username" ><br>
    <input type="password" name="password" placeholder="Enter your password" ><br>
    <input name="submit" type="submit" value="LOGIN">
</form>
<br>
<?php echo $error; ?>

</body>
</html>