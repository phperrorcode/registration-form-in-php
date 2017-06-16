<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
<link rel="stylesheet" href="custom.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="custom.js"></script>
</head>
<body>
	<form action="add_registration.php" method="post">
	  	<h2><span class="entypo-login"></span> Registration</h2>
	  	<button class="submit"><span class="entypo-lock"></span></button>
	  	<span class="entypo-user inputUserIcon"></span>
	  	<input type="text" name="user_name" class="user" placeholder="your ursername" required="" />
	  	<span class="entypo-user inputUserIcon"></span>
	  	<input type="email" name="email" class="user" placeholder="your email" required="" />
	  	<span class="entypo-mail inputEmailIcon"></span>
	  	<input type="password" name="password" class="pass" placeholder="your password" required="" />
	  	<span class="entypo-key inputPassIcon"></span>
	  	<input type="password" name="Verify_password" class="pass2" placeholder="Verify your password" required="" />
	  	<span class="entypo-key inputPassIcon2"></span>
	  	<?php session_start(); if(isset($_SESSION['err'])){ ?>
		<h2>error.....<?php echo $_SESSION['err']; ?></h2>
		<?php session_unset(); } ?>
	</form>
</body>
</html>