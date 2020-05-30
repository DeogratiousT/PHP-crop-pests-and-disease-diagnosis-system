<?php include ('server.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
	<title>CROP PESTS AND DISEASES DIAGNOSIS SYSTEM SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>


<body>
	<div class="header">
	<h2>Farmer Registration</h2>
</div>
<form method="post" action="farmersignup.php">
		<!-- Display the error messages here-->
			<?php include('errors.php'); ?>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="">
	</div>
	<div class="input-group">
		<label>ID NUMBER</label>
		<input type="integer" name="idnumber">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="confpassword">
	</div>
	<div class="input-group">

	<a href = "homepage.html"> <button type="submit" name="register_btn" class="btn" href="homepage.html">SUBMIT</button></a>
	</div>
	<p>
		Already a member? <a href="index.php">Sign in</a> Else switch to <a href="register.html">Expert Register</a>
	</p>
</form>

</body>
</html> 


