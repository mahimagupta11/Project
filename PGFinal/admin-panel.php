<?php
session_start();
?>
<html>

<head>
<title>OWNER PANEL</title>

</head>

<body>
<form action = "panel_next.php" method = "POST">


<table cellpadding = "50px" >
<tr>     <td><h3>Owner Modifications </td>
	     <td>:</td>
             <td><input type="radio" name="choice" value="1"/>Update Info
                 <input type="radio" name="choice" value="2"/>Modify PG</td>
</tr>

</table>
<center><input type="submit" value ="GO"></center>
<center><a href="home.php">LOGOUT</a></center>
</br></br>
</body>

</html>
<?php
$u=$_SESSION["user"];

$link= mysqli_connect("localhost","root","");
	mysqli_select_db($link,"pgproject");
	$query = "select name,oname,address,contact,email from pg where username='".$u."'";
	$result = mysqli_query($link,$query);
	
		while($row = mysqli_fetch_array( $result )) {

echo "<br><br>";

echo "PG Name :" . $row['name']."<br>";
echo "Owner's Name:" . $row['oname']."<br>";
echo "Address :" . $row['address']."<br>";
echo "Contact :" . $row['contact']."<br>";
echo "Email :" . $row['email']."<br>";
echo"<br>";
		
		}
?>


