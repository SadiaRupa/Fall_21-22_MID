<?php
include('../control/datacheck.php');

if(isset($_SESSION['username'])){
header("location: page2.php");
}
?>
<!DOCTYPE html>
<html>
<body>
<h2 align = "center">Personal details</h2>

<form align = "center" action="" method="post">
    <input type="text" name="username" placeholder="Enter your username" ><br>
    <input type="password" name="password" placeholder="Enter your password" ><br>
    <input type="text" name="full_name" placeholder="Enter your full name" ><br>
    <input type="password" name="mobile_no" placeholder="Enter your mobile no." ><br>
	<input type="date" name="dob" placeholder="Enter your dob" ><br>
    <input name="submit" type="submit" value="NEXT">
</form>
<br>
<?php echo $error; ?>

</body>
</html>