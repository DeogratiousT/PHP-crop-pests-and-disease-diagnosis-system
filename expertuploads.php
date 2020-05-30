<?php include ('update.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>EXPERT UPLOADS</title>
	<link rel="stylesheet" type="text/css" href="cssindex.css"/>
<style>
* {
	margin: 0px;
	padding: 0px;
}
body {

	background: #008026;
}

.header {
	width: 72%;
	margin:50px auto 0px;
	color: #ffffff;
	background: #000000;
	text-align: center;
	border: 1px solid #000000;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 20px;
		font-size: 120%;
}

form {
	width: 71.5%;
	margin: 0px auto;
	padding: 20px;	border: 1px solid #008026;
	background: white;
	border-radius: 0px 0px 10px 10px;
	font-size: 120%;
}

.input-group {
	margin: 10px 0px 10px 0px;
}

.input-group label {
	display: block;
	text-align: left;
	margin: 3px;
		font-size: 120%;
}

.input-group input {
	height: 30px;
	width: 93%;
	padding:5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border:1px solid lightgreen;
}

.btn {
	padding:10px;
	font-size: 18px;
	color: white;
	background: #008026;
	border: none;
	border-radius: 5px;
	margin-left: 35%;
}

a {
	text-decoration: none;
}
.error {
	width: 92%;
	margin: 0px auto;
	padding: 10px;
	border: 1px solid #a94442;
	color: #a94442;
	background: #f2dede;
	border-radius: 5px;
	text-align: left;
}


</style>
</head>
<body>
	<div id="headertop">
			<br><h1>CROP PESTS AND DISEASES DIAGNOSIS SYSTEM</h1>
		</div>
		<div id="headermiddle">
			<ul>
            <li style=" border-right: 1px solid lightgreen"><a href="experthome.html">HOME</a></li>
            <li style=" border-right: 1px solid lightgreen"><a href="">ABOUT</a></li>
            <li style=" border-right: 1px solid lightgreen"><a href="expertuploads.php" >	DISEASE UPLOADS</a></li>
            <li style=" border-right: 1px solid lightgreen"><a href="pestuploads.php" >PESTS UPLOADS</a></li></ul>
            <ul>
            <li style=" float:right; border-left: 1px solid lightgreen"><a href="index.html" logout='1'" target="blank"><span class="glyphicon glyphicon-log-in"></span> LOGOUT</a></li>
        </ul>

    </div>
    <br><br><br><br>
<div class="header">
	<h2>Upload new crop diseases and their solutions</h2>
</div> 

<form method="post" enctype="multipart/form-data">


	<!-- Display the error messages here-->
			<?php include('errors.php'); ?>
	<table border="0px" width="100%">		
	<tr class="input-group" >
		<td width="30%"><label>crop name</label></td>
		<td><input type="text" name="cropname"></td>
	</tr>

	<tr class="input-group">
		<td><label>crop part</label></td>
		<td><input type="text" name="croppart"></td>
	</tr>

	<tr class="input-group">
		<td><label>Image of affected crop part</label></td>
		<td><input type="file" name="uploadedfile"></td>
	</tr>
	
	
	<tr class="input-group">
		<td><label>Disease name</label></td>
		<td><input type="text" name="diseasename"></td>
	</tr>

	<tr class="input-group">
		<td><label>Solution</label></td>
		<td><input type="text" name="solution"></td>
	</tr>

	
	<tr class="input-group">
		<td colspan="2"><a href = "expertuploads.php"> <button type="submit" name="submit" class="btn" href="expertuploads.php">Submit</button> </a></td>
	</tr>
</table>
</form>
<form>
<table border="1px">
	<tr><th>Crop Name</th><th>Crop Part</th><th>Images</th><th>Disease Name</th><th>Solution</th></tr>
	<?php
	$con=new mysqli("localhost", "root", "", "crop");
	$qry=mysqli_query($con,"select * from updates");
	while($row=mysqli_fetch_array($qry,MYSQLI_ASSOC)){
		echo '<tr><td>'.$row["cropname"].'</td>';
		echo '<td>'.$row["croppart"].'</td>';
		echo '<td>'; ?> <img src="<?php echo $row["uploadedfile"]; ?>" width="10%" height="10%"/> <?php echo '</td>';
		echo '<td>'.$row["diseasename"].'</td>';
		echo '<td>'.$row["solution"].'</td></tr>';
	}
	?>
</table>
</form>
</body> 
</html>
