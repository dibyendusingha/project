
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>product</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<img src="images/image-1.png" alt="" class="image-1">
				<form action="view.php" method="post" name="form"  onsubmit="return validateForm()">
					<h3>product</h3>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" name="username" class="form-control" placeholder="Username">
					</div>
					
					<div class="form-holder">
						<span class="lnr lnr-phone-handset"></span>
						<input type="text" name="phone" class="form-control" placeholder="Phone Number">
					</div>
					<div class="form-holder">
						<span class=""></span>
						<input type="text" name="phone" class="form-control" placeholder="Phone Number">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
						<input type="text" name="email" class="form-control" placeholder="Mail">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password"  name="password" class="form-control" placeholder="Password">
					</div>
					
					<button name="submit">
						<span>Register</span>
					</button>
					<br>
					<div align="center"><?php echo "or";?></div>
					<button name="login">
						<span><?php echo "All ready login :"; ?>click here</span>	
					</button>
				</form>
				<img src="images/image-2.png" alt="" class="image-2">
			</div>


			
		</div>
		
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>