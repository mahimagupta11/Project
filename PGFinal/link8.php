<html>
<head>
</head>
<body background= "back.jpg" text="navy" topmargin="100">
<h2> Details of all pg between RS 7000-9000 </h2>
</body>
</html>
<?php
$link = mysqli_connect("localhost","root","")or die("Unable to connect");
$db   = mysqli_select_db($link,"pgproject");
$query="Select * from pg where (cost>=7000 && cost<=9000)";
$result=mysqli_query($link,$query) or die("Query not executed");

while($row = mysqli_fetch_array( $result )) {

echo "<br><br>";
echo "PG Name :" . $row['name']."<br>";
echo "Owner's Name:" . $row['oname']."<br>";
echo "Address :" . $row['address']."<br>";
echo "Contact :" . $row['contact']."<br>";
echo "Email :" . $row['email']."<br>";

}

?>
