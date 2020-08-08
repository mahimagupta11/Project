<html>

<head>
<title>OWNER UPDATE</title>

</head>

<body>
<form action = "<?php $_PHP_SELF ?>" method = "POST">



<center></br>
<table cellpadding = "30px" >
<tr>
<td rowspan = "4"><img src="update.png"></td>
<td>USERNAME </td>
<td><input required type="text" name = "username"></td>
</tr>
<tr>
<td>NEW USERNAME </td>
<td><input required type="text" name = "newusername"></td>
</tr>
<tr>
<td>PASSWORD </td>
<td><input required type="password" name = "password"></td>
</tr>
<tr>
<td>NEW PASSWORD </td>
<td><input required type="password" name = "newpswrd"></td>
</tr>
<tr>
<td></td>
<td colspan = "2" align="center"><button type = "submit"  name = "next">SUBMIT</button></td>
</tr>
</table>
<center><a href="home.php">LOGOUT</a></center>
</br></br>
</body>

</html>


<?php

if(ISSET($_POST['next']))
{
	$user = $_POST['username'];
	$new = $_POST['newusername'];
	$pswrd = $_POST['password'];
	$newpswrd = $_POST['newpswrd'];
	
	$link = mysqli_connect("localhost","root","");
	mysqli_select_db($link,"pgproject");
	$query = "select username,password from owner where username = '".$user."' and password = '".$pswrd."'";
	$result = mysqli_query($link,$query);
	if(mysqli_num_rows($result) <= 0)
		echo "<b></br>INVALID USERNAME OR PASSWORD !!!";
	else
	{
		$query = "update owner set username = '".$new."', password = '".$newpswrd."' where password = '".$pswrd."'";
		if(!mysqli_query($link,$query))
			echo "<b></br>Update failed !!!";
		else
			echo "<b></br>Update Successfull ...";
		$query = "update pg set username = '".$new."' where username = '".$user."'";
		mysqli_query($link,$query);
	}
}

?>