<?php
include("header.php");
?>
<html>
<head>  <center>
	<title>pg registration form</title>
</head>
<body background= "back.jpg" text="navy">
<h2><font color="red">Already Registered???</font></h2><a href="login.php"><font size="5"color="#191970" >LOGIN HERE</font></a>
</br>
</br>
</br>
<h2><font color="red">Registration Form</font></h2>
	<form action="next_php.php" method="post">

<br/>
<table cellspacing="10" cellpadding="5">
    <tr><td><b>NAME           </td><td><input required type="text" name="name" placeholder="Name"></b></td></tr>
    <tr><td><b>OWNER NAME     </td><td><input required type="text" name="on" placeholder="Owner-name"></b></td></tr>
    <tr><td><b>USERNAME       </td><td><input required type="text" name="user" placeholder="Username"></b></td></tr>
    <tr><td><b>PASSWORD       </td><td><input required type="password" name="pass1" placeholder="password"></b></td></tr>
    <tr><td><b>CONFIRM PASSWORD</td><td><input required type="password" name="pass2" placeholder="password"></b></td></tr>
    <tr><td><b>ADDRESS         </td><td><input required type="text" name="addr" placeholder="Address"></b></td></tr>
	<tr><td><b>Upload Image    </td><td><input name="txtfile" type="file"></td></b></tr>
	
    <tr><td><b>PIN            </td><td><input required type="number" name="pin" placeholder="Pin"></b></td></tr>
   <td><h3>COST</h3></td><td><input required type="number" name="cost" placeholder="cost"> </td>
           
          </td>
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
    
	<tr><td><b>CONTACT   </td><td><input required type="number" name="contact" placeholder="contact"></b></td></tr>
    <tr><td><b>Email ID  </td><td><input required type="text" name="email" placeholder="Email-id"></b></td></tr>

    <tr>
            <td> <input type="reset" value="Reset"></td>

            <td><input type="submit" value="Register"></td>
    </tr>

</table>


</center>
</h3>
</form>
<hr>
</body>
</html>


<?php
include("footer.php");
?>