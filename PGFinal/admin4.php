
<html>

<head>
<title>ADMIN4</title>

</head>

<body>

<center><a href="home.php">LOGOUT</a></center></body>
</html>
<?php

$user = $_POST['username'];
	
	
	$link= mysqli_connect("localhost","root","");
	mysqli_select_db($link,"pgproject");
	
	$query = "delete from pg where username = '".$user."' ";
		
		if(mysqli_query($link,$query))
			echo "<b></br>Owner Deleted Successfully ...";
		else
			echo "<b></br>Owner deletion Failed !!!";
		$query = "delete from owner where username = '".$user."' ";
		
?>