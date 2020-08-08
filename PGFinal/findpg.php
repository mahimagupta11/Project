<?php
include("header.php");
?>
<html>
<head>  
</head>
<body background= "back.jpg" text="navy" >
<form action="searchpg.php" method="POST">
<center>
<h2>Tell us Your Requirements And We'll Provide You The Best Pg's Available<h2>
<img src="pgstay.png">

<table cellspacing="10" cellpadding="5">
   
   
     <tr>     <td><h3>Looking Pg for </td>
	     <td>:</td>
             <td><input type="radio" name="gender" value="female"/>Girls
             <input type="radio" name="gender" value="male"/>Boys</td>
   </tr>
   <tr><h3>
	   <td><h3>Area</h3></td>
           <td>:</td>
           <td> <select name="area">
  <option value="ed">East Delhi</option>
  <option value="wd">West Delhi</option>
  <option value="nd">North Delhi</option>
  <option value="sd">south Delhi</option>
  <option value="cd">Central Delhi</option>

</select></td>
   </tr>
   
   <tr><h3>
	   <td><h3>COST</h3></td>
           <td>:</td>
           <td> <select name="cost">
  <option value="5k">5000-6000 or less</option>
  <option value="6k">6000-7000</option>
  <option value="7k">7000-9000</option>
  <option value="9k">9000-10000</option>
  <option value="10k">Above 10000 </option>

</select></td>
   </tr>
   

</table>





<input type="submit" value ="FIND">
</center>
</form>

</body>
</html>

<?php
include("footer.php");
?>