<?php
	require_once '../Model/database.php';
	$name="";
	$err_name="";
	$username="";
	$err_username="";
	$email="";
	$err_email="";
	$password="";
	$err_password="";
	$err_db="";
	$hasError=false;
	if(isset($_POST["signup"])){
		if(empty($_POST["name"])){
			$err_name="Name Required";
			$hasError=true;
		}else{
			$name=$_POST["name"];
		}
		if(empty($_POST["username"])){
			$err_username="Username Required";
			$hasError=true;
		}else{
			$username=$_POST["username"];
		}
		
		if(!$hasError){
			$rs = insertUser($name,$username,$_POST["email"],$_POST["password"]);
			//var_dump($rs);
			if($rs === true){
				header("Location: login.php");
			}
			$err_db = $rs;
			
		}
	}
	else if (isset($_POST["btn_login"])){
		if(empty($_POST["username"])){
			$err_username="Username Required";
			$hasError=true;
		}else{
			$username=$_POST["username"];
		}
		if(empty($_POST["password"])){
			$err_password="Password Required";
			$hasError=true;
		}else{
			$password=$_POST["password"];
		}
		if(!$hasError){
			
			
			if($user = authenticateUser($_POST["username"],$_POST["password"])){
				session_start();
                    $_SESSION["data"] = $rs;
                    setcookie("loggedUser",$email,time()+2);
				header("Location: manager_home.php");
					
			}
			$err_db = "Username password invalid";
		}
	}

	function validateEmail($email){
		$pos_at = strpos($email,"@"); 
		$pos_dot = strpos($email,".",$pos_at); 
		if($pos_dot > $pos_at){
			return true;
		}
		return false;
	}
	
	function insertUser($name,$username,$email,$password){
		$query  = "INSERT INTO user values ('$name','$username','$email','$password')";
		return execute($query);	
	}
	function authenticateUser($username,$password){
		$query ="SELECT * from user where username='$username' and password='$password'";
		$rs = get($query);
		if(count($rs)>0){
			return $rs[0];
		}
		return false;
		
	}
	function checkUsername($username){
		$query = "SELECT name from user where username='$username'";
		$rs = get($query);
		if(count($rs) > 0){
			return true;
		}
		else return false;
	}
	
?>