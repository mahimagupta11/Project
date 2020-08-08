<?php
session_start();
?>
<html>
<head>
</head>
<body background= "back.jpg" text="navy" topmargin="100">


<?php
$u=$_SESSION["user"];
$flag=0;
$link= mysqli_connect("localhost","root","");
	mysqli_select_db($link,"pgproject");
if($_POST['name']!=""){
	$name=$_POST['name'];
	$query = "update pg set name = '".$name."' where username = '".$u."'";
if(!mysqli_query($link,$query))
	$flag=1;

}
if($_POST['cost']!=""){
	$cost=$_POST['cost'];
	$query="update pg set cost='".$cost."' where username='".$u."'";
if(!mysqli_query($link,$query))
	$flag=1;
	
}
if($_POST['contact']!=""){
	$contact=$_POST['contact'];
	$query="update pg set contact='".$contact."' where username='".$u."'";
if(!mysqli_query($link,$query))
	$flag=1;
}

if($_POST['email']!=""){
	$email=$_POST['email'];
	$query="update pg set email='".$email."' where username='".$u."'";
if(!mysqli_query($link,$query))
	$flag=1;
}

if($_POST['room']!=""){
	$room=$_POST['room'];
	$query="update pg set roomavl='".$room."' where username='".$u."'";
if(!mysqli_query($link,$query))
	$flag=1;
}
	
	$gender=$_POST['gender'];
	$query="update pg set gender='".$gender."' where username='".$u."'";
	if(!mysqli_query($link,$query))
	$flag=1;
	
	
	$food=$_POST['food'];
	$query="update pg set food='".$food."' where username='".$u."'";
	if(!mysqli_query($link,$query))
	$flag=1;
	

	$geyser=$_POST['geyser'];
	$query="update pg set geyser='".$geyser."' where username='".$u."'";
	if(!mysqli_query($link,$query))
	$flag=1;
	

	$wifi=$_POST['wifi'];
	$query="update pg set wifi='".$wifi."' where username='".$u."'";
	if(!mysqli_query($link,$query))
	$flag=1;
	

	$ac=$_POST['ac'];
	$query="update pg set ac='".$ac."' where username='".$u."'";
	if(!mysqli_query($link,$query))
	$flag=1;
	
if($flag==0)
	echo "Your details updated succesfully"."<br>";
else
	echo "update Failed!!";

echo "Your current Details with us are as--"."<br>";

	$query = "select * from pg where username='".$u."'";
	$result = mysqli_query($link,$query);
	
		while($row = mysqli_fetch_array( $result )) {

echo "<br><br>";

echo "PG Name :" . $row['name']."<br>";
echo "Owner's Name:" . $row['oname']."<br>";
echo "Address :" . $row['address']."<br>";
echo "Cost :" . $row['cost']."<br>";

if($row['gender']=="both")
echo "PG for :Both male and female"."<br>";
else
echo "For Gender :" . $row['gender']."<br>";

echo "Contact no.- :" . $row['contact']."<br>";
echo "Email :" . $row['email']."<br>";

if($row['food']=="yes")
			 echo"Food Provided"; 
else 
			 echo"Food Not Provided";
echo"<br>";

if($row['wifi']=="yes")
			 echo"wifi Provided"; 
else   
			 echo"wifi Not Provided";
echo"<br>";

if($row['geyser']=="yes")
			 echo"Geyser Provided"; 
else 
			 echo"Geyser Not Provided";
echo"<br>";


if($row['ac']=="yes")
			 echo"AC Provided"; 
else 
			 echo"AC Not Provided";
echo"<br>";


}
		?>
		<center><a href="home.php">LOGOUT</a></center>
</body>
</html>