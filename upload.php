<!DOCTYPE html>
<html>
<body>

<form method="post" enctype="multipart/form-data">
	<h3>Upload Image:</h3>
    <input type="hidden" value="1000000" name="MAX-FILE-SIZE" />
    <input type="file" name="uploadedfile" />
    <input type="submit" value="Upload Image" name="submit" style="margin-top:10px;">
</form>
<?php
if(isset($_POST["submit"])) {
	$target_path="images/";
	$target_path=$target_path.basename($_FILES['uploadedfile']['name']);
	if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)){
		$conn=new mysqli("localhost", "root", "", "crop");
		$sql="Insert into images(`path`) values('$target_path')";
		if($conn->query($sql)==TRUE){
			echo "<br><br>";
		}
		else
		{
			echo "Error:".$sql.$conn->error;
		}
		
		$sql1="select path from images order by imageid desc limit 1";
		$result=$conn->query($sql1);
		if($result->num_rows>0){
				while($row=$result->fetch_assoc()){
				$path=$row['path'];
				echo "<img src='$path' height='280' width='320'> ";
			}
			
		}
		$conn->close();
	}
} 
?> 

</body>
</html> 
