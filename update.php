<?php
	session_start(); 
	$cropname = "";
	$croppart="";
	$diseasename = "";
	$uploadedfile= "";
	$solution="";
	$errors = array();
	
	
	


	//connecting to the database
	$db = mysqli_connect('localhost','root','','crop');

	//If the register button is clicked
	if (isset($_POST['submit'])) {
			$uploadedfile = $_FILES['uploadedfile']['name'];
			$directory="pictures/";
	$target_path=$directory.$uploadedfile;
$tmp_name=$_FILES['uploadedfile']['tmp_name'];
		$cropname = mysqli_real_escape_string($db, $_POST['cropname']);
		$croppart = mysqli_real_escape_string($db, $_POST['croppart']);
		$diseasename = mysqli_real_escape_string($db, $_POST['diseasename']);
		$solution = mysqli_real_escape_string($db, $_POST['solution']);
		
		

			

		//ensure all fields are filled properly
		if (empty($cropname)) {
			array_push($errors, "crop name is required");
		}
		if (empty($croppart)) {
			array_push($errors, "crop part name is required");
		}
		if (empty($diseasename)) {
			array_push($errors, "crop name is required");
		}
		if (empty($uploadedfile)) {
			array_push($errors, "Pest image is required");
		}

       if (empty($solution)) {
			array_push($errors, "Solution is required");
		}	
		
		//if there are no errors, save user to the database
		if (count($errors) == 0) {
			if(move_uploaded_file($tmp_name, $target_path)){
        $sql = "INSERT INTO updates(cropname,croppart,diseasename,uploadedfile,solution) VALUES('$cropname','$croppart','$diseasename','$target_path','$solution')";
			
			mysqli_query($db, $sql);

        $msg = "Files upload successful";
		}
		else
		{
			$msg = "unsuccessful";
		}
		


			
		}

				}
	
		
			//$_SESSION['username'] = $username;
			//$_SESSION['success'] = "update successful";
			//header('location:pestuploads.php'); 
		
	

?>
