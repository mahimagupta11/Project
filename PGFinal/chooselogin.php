<?php
include("header.php");
?>
<html>

<head>
<title>LOG IN</title>

</head>

<body>
<form action = "<?php $_PHP_SELF ?>" method = "POST">

<center></br></br>
<table cellpadding = "20px">
<img src="loginlogo.png" />
</br></br>
<tr>
<td>LOGIN AS </td>
<td><select name = "type" size="1">
	<option value="admin" >ADMIN</option>
	<option value="owner" >OWNER</option></td>
</tr>
<tr>
<td colspan = "2" align="center"><button type = "submit" name = "submit">SUBMIT </td>
</tr>
</table>
</br></br>
</body>

</html>


<?php

if(ISSET($_POST['submit']))
{
	$type = $_POST['type'];
	if($type == "admin")
		header('Location:Admin.php');
	else
		header('Location:login.php');
}


?>
