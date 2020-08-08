<html>
<head>
</head>
<body background= "back.jpg" text="navy" topmargin="100">
<h2> Details of all pg with your requirements </h2>

<?php
$a=$_POST['area'];
$g=$_POST['gender'];
$c=$_POST['cost'];
$b="both";


		switch($c) 
{
    case "5k":
        $r1=0;
		$r2=6000;
        break;
    case "6k":
        $r1=6000;
		$r2=7000;
        break;
    case "7k":
        $r1=7000;
		$r2=9000;
        break;
    case "9k":
        $r1=9000;
		$r2=10000;
        break;
    case "10k":
        $r1=10000;
		$r2=60000;
		break;
}


//$check=$_POST['req'];
//echo "checked is". $check;
		
	
switch($a) 
{
    case "ed":
    $query="Select * from pg where (gender = '".$g."' OR gender = '".$b."'  ) && (cost between '".$r1."' and '".$r2."') && 
pin IN('110092','110095','110091','	110090','110093','110094')";
		break;
    case "wd":
    $query="Select * from pg where (gender = '".$g."' OR gender = '".$b."' ) && (cost between ".$r1." and ".$r2.") && 
pin IN('110058','110059','110064','	110063','110077','110041')";
        break;
    case "nd":
    $query="Select * from pg where (gender = '".$g."' OR gender = '".$b."' ) && (cost between ".$r1." and ".$r2.") && 
pin IN('110006','110007','110054','	110084','110085')";
        break;
    case "sd":
    $query="Select * from pg where (gender = '".$g."' OR gender = '".$b."' ) && (cost between ".$r1." and ".$r2.") && 
pin IN('110003','110025','110062','110019','110076')";     
        break;
	case "cd":
	$query="Select * from pg where (gender = '".$g."' OR gender = '".$b."' ) && (cost between ".$r1." and ".$r2.") && 
pin IN('110002')";
	break;
	
}

$link = mysqli_connect("localhost","root","")or die("Unable to connect");
$db   = mysqli_select_db($link,"pgproject");
$result=mysqli_query($link,$query) or die("Query not executed");
if(mysqli_num_rows($result)==0)
	echo "Sorry!!Required PG Not Available"."<br>";
else{
while($row = mysqli_fetch_array( $result )) {

echo "<br><br>";
echo "PG Name :" . $row['name']."<br>";
echo "Owner's Name:" . $row['oname']."<br>";
echo "Address :" . $row['address']."<br>";
echo "Contact :" . $row['contact']."<br>";
echo "Email :" . $row['email']."<br>";

}
}
?>
</body>
</html>