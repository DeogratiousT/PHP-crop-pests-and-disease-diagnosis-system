<html>
	<head>
		<title></title>
		<style>
			#pesttop
			{
				width:100%;
				height:85%;
			}
			#pestbottom
			{
				width:100%;
				height:15%;
			}
			 a:link,a:visited{ color:#008026; }
            a:hover,a:active{ background-color:#90EE90; color:#000000; text-decoration:underline #008026 double;}


		</style>
	</head>
	<body>
		<div id="maizeall">
			<div id="pesttop">
				
 <table border="1px" style=" align:center; width:100%;">
 <tr><td colspan="4"><h3><center>CROP PESTS AND THEIR SOLUTIONS</center></h3></td></tr>
	<tr><th>Pest name</th><th>Pest Images</th><th>Solution</th></tr>
	<?php
	$con=new mysqli("localhost", "root", "", "crop");
	$qry=mysqli_query($con,"select * FROM pests");
	while($row=mysqli_fetch_array($qry,MYSQLI_ASSOC)){
		echo '<tr><td>'.$row["pestname"].'</td>';
		echo '<td>'; ?> <img src="<?php echo $row["uploadedfile"]; ?>" width="10%" height="10%"/> <?php echo '</td>';
		echo '<td>'.$row["solution"].'</td></tr>';
	}
		?>
		
		<tr id="pestbottom">
							<td colspan="4"><p style="color:#000000;text-align:center; font-size:16px;"><b>solutions not found?<br>
				
				Click to <a href="upload.php" target="MIDDLE">upload</a> a photo of affected crop</b></p></td>
		
		</tr>
</table>

		</div>
		
		
		</div>
	</body>
</html>

