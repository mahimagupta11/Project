<html>
<head>
</head>
<body background= "back.jpg" text="navy" topmargin="100">
<h2> All details of pg </h2>
</body>
</html>
<?php
session_start();
$link = mysqli_connect("localhost","root","")or die("Unable to connect");
$db   = mysqli_select_db($link,"pgproject");
$x=$_SESSION["pgno"];
$query="Select * from pg where pgno=".$x." ";
$result=mysqli_query($link,$query) or die("Query not executed".mysqli_error());

while($row = mysqli_fetch_array( $result )) {

echo "<br><br>";
echo "PG Name :" . $row['name']."<br>";
echo "Owner's Name:" . $row['oname']."<br>";
echo "Address :" . $row['address']."<br>";
echo "Contact :" . $row['contact']."<br>";
echo "Email :" . $row['email']."<br>";

}

//pin of anandvihar dilshad garden mayur vihar
?>
