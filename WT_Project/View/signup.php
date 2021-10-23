<?php
include('../Controllers/reg_controller.php');

if(isset($_SESSION['username'])){
header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<body>
<h2 align = "center">Sign up</h2>

<form align = "center" action="" method="post">
    <input type="text" name="name" placeholder="Enter your name" ><br>
    <input type="text" name="username" placeholder="Enter your username" ><br>
    <input type="text" name="email" placeholder="Enter your email" ><br>
    <input type="password" name="password" placeholder="Enter your password" ><br>
    <input name="submit" type="submit" value="SIGN UP">
</form>
<br>
<?php echo $error; ?>

</body>
</html>