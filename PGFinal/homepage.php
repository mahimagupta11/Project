<!DOCTYPE html>
<html>
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="homepage.php"><img src="logoblack.png" style="width: 8%;height: 8%;"></a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="findpg.php" class="w3-bar-item w3-button">Find PG</a>
      <a href="../pgproject/form.php" class="w3-bar-item w3-button">Register</a>
      <a href="chooselogin.php" class="w3-bar-item w3-button">Login</a>
	  
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="bed.jpg" alt="Architecture" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>Amigo's</b></span> <span class="w3-hide-small w3-text-light-grey">Feel at Home</span></h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Areas</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">East Delhi</div>
        <a href="link1.php"><img src="eastd.jpg" alt="House" style="width:100%"></a>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">West Delhi</div>
        <a href="link2.php"><img src="westd.jpg" alt="House" style="width:100%"></a>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">North Delhi</div>
        <a href="link3.php"><img src="northde.jpg" alt="House" style="width:100%;height:100%;"></a>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">South Delhi</div>
        <a href="link4.php"><img src="southd.jpg" alt="House" style="width:100%;height:100%;"></a>
      </div>
    </div>
  </div>


  <!-- About Section -->
  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">About</h3>
    <p>Search on our interface by price, location, city or otherwise.
 Directly connect with genuine people for free!! No brokers here . Find perfect place to stay.
 Move in to your prefered listing with a single click.You tell us your preferences like what you are looking for, like your budget specifics,area and other wants.
 We'll sort the pg's according to it.Happy hunting pg;
    </p>
  </div>
   <div class="w3-container w3-padding-32" id="price">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Price</h3>
  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <a href="link6.php"><img src="pg5.jpg" alt="John" style="width:100%"></a>
      <h3>5000-6000</h3>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <a href="link7.php"><img src="pg6.jpg" alt="Jane" style="width:100%"></a>
      <h3>6000-7000</h3>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <a href="link8.php"><img src="a.jpg" alt="Mike" style="width:100%"></a>
      <h3>7000-9000</h3>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <a href="link9.php"><img src="pg91.jpg" alt="Dan" style="width:100%"></a>
      <h3>9000-10000</h3>
    </div>
  </div>
  </div>

  <!-- Contact Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
    <p>Please write your query below.</p>
    <form action="<?php $_PHP_SELF ?>" target="_blank">
      <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Email" required name="Email">
      <input class="w3-input w3-section w3-border" type="number" placeholder="Phone" required name="Phone">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Comment" required name="Comment">
      <button class="w3-button w3-black w3-section" type="submit">
        <i class="fa fa-paper-plane"></i> SEND
      </button>
	  <?php
	  if(ISSET($_POST['send']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$contact = $_POST['phone'];
	$ques = $_POST['query'];
	$pattern = "/^[a-zA-Z0-9_.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9.]/";	
	if(!preg_match($pattern,$email))
		echo "<b></br>Invalid email-id !!!";
	elseif($contact < "1000000000")
		echo "<b></br>Invalid Phone no. !!!";
	else
	{
		$status = mysqli_connect("localhost","root","");
		mysqli_select_db($status,"login");
		$query = "insert into contact values ('".$name."','".$email."','".$contact."','".$ques."')";
		if(mysqli_query($link,$query))
			echo "<b></br>Your request has been submitted ...";
		else
			echo "<b></br>Request submission failed !!!";
	}
}?>
    </form>
  </div>

<!-- End page content -->
</div>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>Copyright Protected © by Hostelnpg Online Services Pvt. Ltd.</p>
</footer>

</body>
</html>
