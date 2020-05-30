<?php include ('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>User registration System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
	<h2>Farmer Login</h2>
</div> 

<form method="post" action="index.php">
		<!-- Display the error messages here-->
			<?php include('errors.php'); ?>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div>
	
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password">
	</div>
	
	<div class="input-group">
		<a href = "homepage.html"> <button type="submit" name="login" class="btn" href="homepage.html">Login</button> </a>
	</div>
	<p>Don't have an account yet? <a href="farmersignup.php">Sign up</a></p>
	<br><p>Switch to  <a href="explogin.php">Expert Login</a></p>
</form>
</body>
</html>