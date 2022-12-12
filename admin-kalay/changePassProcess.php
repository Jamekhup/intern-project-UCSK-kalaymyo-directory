<?php  
	session_start();

	require('dbcon.php');

	$newpass = $_POST['pass'];
	$passId = $_POST['passId'];

	// pass encrypt
	$encPass = md5($newpass);

	$passSql = "UPDATE admin SET Password='$encPass' WHERE id='$passId'";
	if (mysqli_query($connection,$passSql)) {
		unset($_SESSION['reset']);
		unset($_SESSION['passId']);

		echo "<p class='alert alert-success'>Password Reset Successfully! <a href='index.php'>Click Here to login Now</a></p>";
	}
?>