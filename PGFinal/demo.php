<!DOCTYPE HTML>
<html>
	<head>
	   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title><?php echo $title; ?></title>	   
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
	<body>
         <div id="wrapper">
		  <div id="banner">
		</div>
		 <nav id="navigation">
              <ul id="nav">
			     <li><a href="index.php">Home</a></li>
				 <li><a href="coffee.php">Coffee</a></li>
				 <li><a href="shop.php">Shop</a></li>
				 <li><a href="about.php">About</a></li>
			
			
			</ul>
		</nav>	
			<div id= "content_area ">
			<?php echo $content;?>
			</div>
			<div id="sidebar">
			</div>
			
			
			<footer>
				<p>All right reserved</p>
			</footer>
		</div>
	</body>
</html>
