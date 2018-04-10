<?php
session_start();

$db=mysql_connect("localhost","root","","ShopRegister");

if(isset($_POST['register_btn'])){
	session_start();
	$username=mysql_real_escape_string($_POST['username']);
	$email=mysql_real_escape_string($_POST['email']);
	$password=mysql_real_escape_string($_POST['password']);
	$password2=mysql_real_escape_string($_POST['password2']);
	
	if($password==$password2){
		$password=md5(password);
		$sql="INSERT INTO users(username,email,password) VALUE('$username','$email','$password')";
			mysql_query($db,$sql);
			$_SESSION['message']="You are now logged in"
			$_SESSION['username']=$username;
			header("location: shop.php")
			}else{
				$_SESSION['message']="the two passwords do not match";
				
			}
	
}
?>

<!DOCTYPE html>
<html>
<head>
<title> Register</title>
</head>
<body>
<header class="header">
<h1>register</h1>
</header>

<form method="post" action="register.php">
	<table>
		<tr>
			<td>Username:</td>
			<td><input type="text" name="username" class="textInput"></td>
		</tr>	
		<tr>
			<td>Email:</td>
			<td><input type="email" name="email" class="textInput"></td>
		</tr>	
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password" class="textInput"></td>
		</tr>	
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password2" class="textInput"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="register_btn" value="Register"></td>
		</tr>		
	