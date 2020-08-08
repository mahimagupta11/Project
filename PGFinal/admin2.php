<?php
session_start();
?>
<html>

<head>
<title>admin2</title>

</head>

<body>


<?php

	$username = $_POST['username'];
	
	$_SESSION["user"]=$username;
	$password = $_POST['pass'];
	$link = mysqli_connect("localhost","root","");
	mysqli_select_db($link,"pgproject");
	$query = "select username,password from admin where username = '".$username."' and password = '".$password."'";
	$result = mysqli_query($link,$query);
	if(mysqli_num_rows($result) <= 0)
	{
		echo "</br>Invalid Username or Password !!!";
	}
	else
	{
		
	header('Location:admin3.php');}
?>



