<!doctype html>
<html>
<head>
	<title>Owner Registration</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Student Registration Form"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200" rel="stylesheet">
	<!-- /fonts -->
	<!-- css -->
	<link href="css/bootstrap.css" rel="stylesheet" type='text/css' media="all" />
	<link href="css/style.css" rel="stylesheet" type='text/css' media="all" />
	<!-- /css -->
</head>

<body>

	<div class="content-agileits">
		<h1 class="title">Register</h1>
		
		<div class="left">
			<form action="../next_php.php" method="post">
				<div class="form-group">
					<label for="firstname" class="control-label">PG Name:</label>
					<input type="text" class="form-control" name="name" placeholder="PG Name" data-error="Enter Your PG Name" required>
					<div class="help-block with-errors"></div>
				</div>
				<div class="form-group">
					<label for="lastname" class="control-label">Owner Name:</label>
					<input type="text" class="form-control" name="on" placeholder="Owner Name" data-error="Enter Your Name" required>
					<div class="help-block with-errors"></div>
				</div>
				<div class="form-group">
					<label for="inputEmail" class="control-label">Email:</label>
					<input type="email" class="form-control" name="email" placeholder="Email" data-error="This email address is invalid" required>
					<div class="help-block with-errors"></div>
				</div>
				<div class="form-group">
					<label for="contact" class="control-label">Phone:</label>
					<input type="text" class="form-control" id="contact" placeholder="Phone" data-error="Enter Your Phone Number" required>
					<div class="help-block with-errors"></div>
				</div>
				<div class="form-group">
					<label for="room" class="control-label">Available Rooms:</label>
					<input type="text" class="form-control" id="room" placeholder="Rooms" data-error="Enter no. of rooms" required>
					<div class="help-block with-errors"></div>
				</div>
				<div class="form-group">
					<label for="cost" class="control-label">Cost:</label>
					<input type="text" class="form-control" id="cost" placeholder="Cost" data-error="Enter cost" required>
					<div class="help-block with-errors"></div>
				</div>
				<div class="form-group">
					<label for="pin" class="control-label">Pin:</label>
					<input type="text" class="form-control" id="pin" placeholder="pin" data-error="Enter pin" required>
					<div class="help-block with-errors"></div>
				</div>
				<div class="form-group">
					<label for="addr" class="control-label">Address:</label>
					<input type="text" class="form-control" id="addr" placeholder="Address" data-error="Enter Address" required>
					<div class="help-block with-errors"></div>
				</div>
				
				<div class="form-group">
					<label for="user" class="control-label">Username:</label>
					<input type="text" class="form-control" id="user" placeholder="Username" data-error="Enter Your Username" required>
					<div class="help-block with-errors"></div>
				</div>
				
				<div class="form-group">
					<label for="pass1" class="control-label">Password:</label>
					<div class="form-inline row">
						<div class="form-group col-sm-6 agileits-w3layouts">
							<input type="password" data-minlength="6" class="form-control" id="pass1" placeholder="Password" required>
							<div class="help-block">Minimum of 6 characters</div>
						</div>
						<div class="form-group col-sm-6 w3-agile">
							<input type="pass2" class="form-control" id="pass2" data-match="#inputPassword" data-match-error="Whoops, these don't match"
							    placeholder="Confirm Password" required>
							<div class="help-block with-errors"></div>
						</div>
					</div>
				</div>
				<div class="form-group w3ls-opt">
					<label for="p" class="control-label">PG for</label>

					<label class="w3layouts">
						<input type="radio" name="work5" id="m" value="male" checked>Male
					</label>
					<label class="w3layouts label2">
						<input type="radio" name="work5" id="f" value="female">Female
					</label>
					<label class="w3layouts label2">
						<input type="radio" name="work5" id="b" value="both">Both
					</label>
				</div>
				<div class="form-group w3ls-opt">
					<label for="facility" class="control-label">Facilities Provided</label>
				</div>
				<div class="form-group w3ls-opt">
					<label for="food" class="control-label">Food</label>

					<label class="w3layouts">
						<input type="radio" name="work4" id="fo" value="provided" checked>Provided
					</label>
					<label class="w3layouts label2">
						<input type="radio" name="work4" id="od" value="not provided">Not provided
					</label>
				</div>
				<div class="form-group w3ls-opt">
					<label for="wifi" class="control-label">Wifi</label>

					<label class="w3layout
						<input type="radio" name="work3" id="wi" value="provided" checked>Provided
					</label>
					<label class="w3layouts label2">
						<input type="radio" name="work3" id="fi" value="not provided">Not provided
					</label>
				</div>
				<div class="form-group w3ls-opt">
					<label for="geyser" class="control-label">Geyser</label>

					<label class="w3layouts">
						<input type="radio" name="work2" id="gey" value="provided" checked>Provided
					</label>
					<label class="w3layouts label2">
						<input type="radio" name="work2" id="ser" value="not provided">Not provided
					</label>
				</div>
				<div class="form-group w3ls-opt">
					<label for="ac" class="control-label">AC</label>

					<label class="w3layouts">
						<input type="radio" name="work" id="a" value="provided" checked>Provided
					</label>
					<label class="w3layouts label2">
						<input type="radio" name="work" name="c" value="not provided">Not provided
					</label>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-lg">submit</button>
				</div>
			</form>
		</div>
		<div class="right"></div>
		<div class="clear"></div>
	</div>
	
	<p class="copyright-w3ls">© Owner Registration Form.
	
	</p>
	<!-- js -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- //js -->

	<script src="js/bootstrap.min.js"></script>
	<script src="js/validator.min.js"></script>
	<!-- /js files -->
</body>
</html>
