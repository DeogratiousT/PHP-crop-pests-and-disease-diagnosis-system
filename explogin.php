<?php include ('eserver.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>expert registration System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
	<h2>Expert Login</h2>
</div> 

<form method="post" action="eserver.php">
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
		<a href="experthome.html"><button type="submit" name="login" class="btn">Login</button></a>
	</div>
	<p>Don't have an account yet? <a href="register.html">Sign up</a></p>
	<br><p>Switch to  <a href="index.php">Farmer Login</a></p>
</form>
</body>
</html>
