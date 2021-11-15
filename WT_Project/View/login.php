<?php
	include '../Controllers/reg_controller.php';
?>

<html>
    <body align ="center">
<div>
	<h1>Login</h1>
	<h5><?php echo $err_db;?></h5>
	<form action="" method="post">
		<div>
			<h4>Username</h4> 
			<input type="text" name="username" value="<?php echo $username;?>">
			<span><?php echo $err_username;?></span>
		</div>
		<div>
			<h4>Password</h4> 
			<input type="password" name="password">
			<span><?php echo $err_password;?></span>
		</div>
		<div>
			
			<input type="submit" name="btn_login" value="Login">
		</div>
		<div>
			
			<a href="signup.php" >Not registered yet? Sign Up</a>
		</div>
	</form>
</div>

</body>
</html>