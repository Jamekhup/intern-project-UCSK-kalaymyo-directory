<?php  
	session_start();
	require_once('dbcon.php');
	$getCode = $_POST['code'];
	

	$_SESSION['passId'] = $_POST['keyid'];

	$select = "SELECT * FROM admin WHERE reset_pass='$getCode'";
	$query = mysqli_query($connection,$select);

	if ($query->num_rows > 0) {
		$_SESSION['reset'] = true;
	}

?>