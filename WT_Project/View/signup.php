<?php
	include '../Controllers/reg_controller.php';
?>

<html>
    <body align ="center">
<div>
	<h1>Sign Up</h1>
	<h5><?php echo $err_db;?></h5>
	<form action="" method="post">
		<div>
			<h4>Name</h4> 
			<input type="text" name="name" value="<?php echo $name;?>">
			<span><?php echo $err_name;?></span>
		</div>
		<div>
			<h4>Username</h4> 
			<input type="text" onfocusout="checkUsername(this)" name="username" value="<?php echo $username;?>">
			<span id="err_username" ><?php echo $err_username;?></span>
		</div>
		<div>
			<h4>Email</h4> 
			<input type="text" name="email">
            <span id="err_email" ><?php echo $err_email;?></span>
		</div>
		<div>
			<h4 class="text">Password</h4> 
			<input type="password" name="pass" class="form-control">
            <span id="err_password" ><?php echo $err_password;?></span>
		</div>
		<div>
			
			<input type="submit" name="signup" value="Sign Up">
		</div>
	</form>
</div>
</body>
</html>
