<?phpsession_start(); 
	$filetoload = "";
	
	$errors = array();


$db = mysqli_connect('localhost','root','','file');
if (isset($_POST['submit'])) {
		$filetoload = mysqli_real_escape_string($db, $_POST['filetoload']);
if (empty($fileoload)) {
			array_push($errors, "file is required");
		}
		if (count($errors) == 0) {

		$sql = "INSERT INTO test.pic(filetoload) VALUES('$filetoload)";
			mysqli_query($db, $sql);
			$_SESSION['success'] = "Welcome user $username";
		}