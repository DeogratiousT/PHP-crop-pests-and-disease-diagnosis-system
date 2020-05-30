<?php
if(isset($_POST["submit"])) {
	$target_path="pictures".basename($_FILES['uploadedfile']['name']);
	$conn=new mysqli("localhost", "root", "", "crop");
	$uploadedfile = $_FILES['uploadedfile']['name'];
			$sql="Insert into updates(`path`) values('$target_path')";
	if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)){


        if($conn->query($sql)==TRUE){
			echo "<br><br>";
		}
		else
		{
			echo "Error:".$sql.$conn->error;
		}
		
		}
		
 }?>

