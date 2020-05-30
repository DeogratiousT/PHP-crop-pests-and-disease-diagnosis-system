
<html>
	<head>
		<title></title>
	</head>
	<body>
		<div id="beansall">
<table border="1px" style=" align:center; width:100%;">
	
  <tr><td colspan="4"><h3><center>POTATO CROP DISEASES AND SOLUTIONS</center></h3></td></tr>
	<tr><th>Crop Part</th><th>Images</th><th>Disease Name</th><th>Solution</th></tr>
	<?php
	$con=new mysqli("localhost", "root", "", "crop");
	$qry=mysqli_query($con,"select croppart,uploadedfile,diseasename,solution FROM updates WHERE cropname = 'potato'");
	while($row=mysqli_fetch_array($qry,MYSQLI_ASSOC)){
		echo '<tr><td>'.$row["croppart"].'</td>';
		echo '<td>'; ?> <img src="<?php echo $row["uploadedfile"]; ?>" width="10%" height="10%"/> <?php echo '</td>';
		echo '<td>'.$row["diseasename"].'</td>';
		echo '<td>'.$row["solution"].'</td></tr>';
	}
		?>
</table>

		</div>
	</body>
</html>


