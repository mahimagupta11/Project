<?php
include("header.php");
?>
<html>
<head><title>registered</title> </head>
<body bgcolor="#8aa55d" text="#04223a" topmargin="50"> 
<center>


 
<table cellspacing="10" cellpadding="5">
	<tr><h3>
	   <td>Name of Pg</td>
           <td>:</td>
           <td> <?php $name=$_POST['name']; echo"$name";?></td>
   </tr>
   

   <tr>    <td> Owner's Name </td>
           <td>:</td>
           <td> <?php $ownername=$_POST['on']; echo"$ownername"; ?></td>
   </tr>
   <tr>
           <td> Address</td>
	   <td>:</td>
           <td> <?php $address=$_POST['addr']; echo"$address" ;?></td>
   </tr>
   <tr>
           <td> PIN Code</td>
	    <td>:</td>
           <td>  <?php $pin=$_POST['pin']; echo"$pin" ;?></td>
   </tr>
   <tr>
           <td> Cost</td>
	    <td>:</td>
           <td>  <?php $cost=$_POST['cost']; echo"$cost" ;?></td>
   </tr>
   
   <tr>    <td>PG for</td>
           <td>:</td>
           <td><?php $gen=$_POST['gender']; echo"$gen" ;?></td>
   </tr>
   <tr>
    <td colspan="3"><b> Facilities Provided</b></td>
   </tr>
    <tr>     <td>Food </td>
	         <td>:</td>
             <td><?php $food=$_POST['food']; 
			 if($food=="yes")
			 {
				 $food=1;
				 echo"Food Provided"; 
			 }
			 else 
			 { 
		       $food=0;
			   echo"Food Not Provided";
		       
		     }
			 
			 ?></td>
   </tr>

 
    <tr>     <td>WiFi </td>
	     <td>:</td>
             <td><?php $wi=$_POST['wifi']; 
			 if($wi=="yes"){$wi=1;
			 echo" wifi Provided"; }
			 else {echo" wifi Not Provided";
			 $wi=0;}
			 ?></td>
    </tr>


    <tr>     <td>Geyser </td>
	     <td>:</td>
             <td><?php $g=$_POST['geyser']; 
			 if($g=="yes")
			 {echo"Geyser Provided";
                    $g=1;		 
			 }
			 else{ 
			 echo"Geyser Not Provided";
			 $g=0;
			   }
			 ?></td>
    </tr>  
    <tr>     <td>AC </td>
	     <td>:</td>
             <td><?php $ac=$_POST['ac']; 
			 if($ac=="yes"){
				 echo" AC Provided"; 
				 $ac=1;
			 }
			 else {echo" AC Not Provided";
			 $ac=0;}
			 ?></td>
    </tr> 
   
   <tr>
            <td>Contact </td>
	     <td>:</td>
            <td>  <?php $contact=$_POST['contact']; 
				 echo" $contact"; 
			 
			 ?></td>
   </tr>
    <tr>
            <td> Email </td>
	    <td>:</td>
            <td>   <?php $email=$_POST['email']; 
				 echo" $email"; 
			 
			 ?></td>
   </tr>

 

</table>
	
</center>
<?php 
$user=$_POST['user'];
$pass1=$_POST['pass1'];
$pass2 = $_POST['pass2'];
$name = $_POST['name'];
$ownername=$_POST['on'];
$pin=$_POST['pin'];
$cost=$_POST['cost'];	 
$address =$_POST['addr'];
$email = $_POST['email'];
$con= $_POST['contact'];
$gen = $_POST['gender'];
$food=$_POST['food']; 
$wi=$_POST['wifi']; 
$g=$_POST['geyser']; 
$ac=$_POST['ac']; 
$room=$_POST['room'];
	 $pattern = "/^[a-zA-Z0-9_.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9.]/";	
	 if($pass1 != $pass2)
		 echo "<b>INVALID PASSWORD !!!";
	 elseif(!preg_match($pattern,$email))
		 echo "<b></br>INVALID EMAIL-ID !!!";
else
	{
	 $link = mysqli_connect("localhost","root","")or die("Unable to connect");

$db = mysqli_select_db($link,"pgproject");

$query = "Insert into pg values ('".$name."','".$ownername."','".$address."','".$pin."','".$cost."','".$gen."','".$food."','".$wi."','".$g."','".$ac."','".$con."','".$email."','".$user."','".$room."')";
                                 
								 
								 if(!mysqli_query($link,$query))
		 echo "<b></br>Registration failed !!!";
	 else
		 echo "<b></br>Registration Successfull ...";
$query1 = "Insert into owner values ('".$user."','".$pass1."')";
mysqli_query($link,$query1) or die("Query not executed");
	}
	
	 
		 ?>
</body>
</html>


<?php
include("footer.php");
?>