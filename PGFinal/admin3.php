<html>

<head>
<title>ADMIN3</title>

</head>

<body>
<form action = "admin4.php" method = "POST">


<table>
<tr>
<td>USERNAME TO BE DELETED </td>
<td><input  required type="text" name = "username"></td>
</tr>
<tr
<td align="center"><button type="submit" name = "delete">DELETE USER</button></td>

</tr>
</table>
<center><a href="home.php">LOGOUT</a></center>
</br></br>
<center>Details of all the pg's Registered by owners---</center></br>
</body>

</html>


<?php

$link= mysqli_connect("localhost","root","");
	mysqli_select_db($link,"pgproject");
$query= "select * from pg";
	$result= mysqli_query($link,$query) or die("Query not executed");

while($row = mysqli_fetch_array( $result )) {

echo "<br><br>";
echo "PG Name :" . $row['name']."<br>";
echo "Owner's Name:" . $row['oname']."<br>";
echo "Address :" . $row['address']."<br>";
echo "Contact :" . $row['contact']."<br>";
echo "Email :" . $row['email']."<br>";
echo "Username:" . $row['username']."<br>";
}
	?>
	
	