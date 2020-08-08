<html>
<head>
</head>
<body background= "back.jpg" text="navy" topmargin="100">
<h2> Details of all pg in East Delhi </h2>
</body>
</html>
<?php
//session_start();
$link = mysqli_connect("localhost","root","")or die("Unable to connect");
$db   = mysqli_select_db($link,"pgproject");
$query="Select * from pg where pin IN('110092','110095','110091','110090','110093','110094')";
$result=mysqli_query($link,$query) or die("Query not executed");

//echo"<form action=\"show.php\" method=\"post\">";

while($row = mysqli_fetch_array( $result )) {

echo "<br><br>";

echo "PG Name :" . $row['name']."<br>";
echo "Owner's Name:" . $row['oname']."<br>";
echo "Address :" . $row['address']."<br>";
echo "Contact :" . $row['contact']."<br>";
echo "Email :" . $row['email']."<br>";
echo "Picture :" . $row['image']."<br>";
echo"<br>";

}


?>


