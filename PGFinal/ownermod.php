<?php
session_start();
?>
<html>
<head>
</head>
<body background= "back.jpg" text="navy" topmargin="100">
<form action="ownermod2.php" method="post">
<h2> Your current pg details:- </h2>

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
echo "Rooms Available :" . $row['roomavl']."<br>";
echo"<br>";
		
		}
	?>

	Enter the details you want to change--
	<table cellspacing="10" cellpadding="5">
    <tr><td><b>NAME           </td><td><input  type="text" name="name" placeholder="Name"></b></td></tr>
    <td><h3>COST</h3></td>     <td><input type="number" name="cost" placeholder="cost"> </td>
           <tr><td><h3>No. Of Rooms Available</h3></td> <td><input required type="number" name="room" > </td></tr>
           
    <tr>    <td>PG for</td>
           <td><input type="radio" name="gender" value="male"/>male 
           <input type="radio" name="gender" value="female"/>female
           <input type="radio" name="gender" value="both"/>both</td>
   </tr>
   <tr>
    <td><b> Facilities Provided</b></td>
   </tr>
    <tr>     <td>Food </td>
             <td><input type="radio" name="food" value="yes"/>Food provided
             <input type="radio" name="food" value="no"/>Food not provided</td>
   </tr>

    <tr>     <td>WiFi </td>
             <td><input type="radio" name="wifi" value="yes"/>WiFi provided
             <input type="radio" name="wifi" value="no"/>WiFi not provided</td>
    </tr>


    <tr>     <td>Geyser </td>
             <td><input type="radio" name="geyser" value="yes"/>Geyser provided
             <input type="radio" name="geyser" value="no"/>Geyser not provided</td>
    </tr>  
    <tr>     <td>AC</td>
             <td><input type="radio" name="ac" value="yes"/>AC provided
             <input type="radio" name="ac" value="no"/>AC not provided</td>
    </tr> 
    
	<tr><td><b>CONTACT      </td><td><input type="number" name="contact" placeholder="contact"></b></td></tr>
    <tr><td><b>Email ID     </td><td><input type="text" name="email" placeholder="Email-id"></b></td></tr>

    <tr>
            <td> <input type="reset" value="RESET"></td>

            <td><input type="submit" value="UPDATE"></td>
    </tr>

</table>