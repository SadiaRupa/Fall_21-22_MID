<?php
include('../control/datacheck.php');

if(isset($_SESSION['username'])){
	header("location: page2.php");
}
?>
<!DOCTYPE html>
<html>
<body>
<h2 align = "center">Education</h2>

<form align = "center" action="" method="post">
    <input type="text" name="uni" placeholder="Enter your uni name" ><br>
    <input type="text" name="degree" placeholder="Enter your degree" ><br>
    <input type="text" name="major" placeholder="Enter your major" ><br>
    <input type="floatval" name="results" placeholder="Enter your results" ><br>
	<input type="date" name="pass_year" placeholder="Enter your passing year" ><br>
    <input name="submit" type="submit" value="SUBMIT">
</form>
<br>
<?php echo $error; ?>

</body>
</html>