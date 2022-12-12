<?php  
	$server='localhost';
	$username='root';
	$password='';
	$dbname='myanmarw_kld';

	$connection = mysqli_connect($server, $username, $password, $dbname);

	if (mysqli_connect_errno()) {
		echo "falied to connect". mysqli_connect_errno();

		
	}
?>