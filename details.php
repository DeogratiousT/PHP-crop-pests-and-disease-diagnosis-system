<?php

	//connecting to the database
	$db = mysqli_connect('localhost','root','','details');

	//If the register button is clicked
	if (isset($_POST['send'])) {
		$fullname = mysqli_real_escape_string($db, $_POST['fullname']);
		$phonenumber = mysqli_real_escape_string($db, $_POST['phonenumber']);
		$applicationletter = mysqli_real_escape_string($db, $_POST['applicationletter']);
		$document = mysqli_real_escape_string($db, $_POST['document']);
		$email = mysqli_real_escape_string($db, $_POST['email']);

		//ensure all fields are filled properly
		if (empty($fullname)) {
			array_push($errors, "name is required");
		}
		if (empty($phonenumber)) {
			array_push($errors, "number is required");
		}
		if (empty($applicationletter)) {
			array_push($errors, "letter is required");
		}
		if (empty($document)) {
			array_push($errors, "documents is required");
		}if (empty($email)) {
			array_push($errors, "email is required");
		}

		

		if (count($errors) == 0) {
			
			$sql = "INSERT INTO detail(fullname,phonenumber,applicationletter,document,email)
			 VALUES('$fullname','$phonenumber','$applicationletter','$document','$email')";
			
			mysqli_query($db, $sql);
		
			
		}
		?>
