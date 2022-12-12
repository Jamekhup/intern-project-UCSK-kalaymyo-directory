<?php
error_reporting(0);  
	$getValue = $_POST['value'];
	if ($getValue ==null) {
		echo "Soryy,.No Such Realted Post Found......";
	}else{

		require_once('admin-kalay/dbcon.php');

		$sql = "SELECT * FROM post WHERE Name LIKE '%".$getValue."%' or Address LIKE '%".$getValue."%' or PhoneNumber LIKE '%".$getValue."%' or Category LIKE '%".$getValue."%' or Description LIKE '%".$getValue."%'";
		$query = mysqli_query($connection,$sql);
		if ($query->num_rows > 0) {
			

			foreach ($query as $key => $value) {
				echo "<li class='list-group-item'><a href='category.php?name=".$value['Category']."'>".$value['Name']."</a></li>";
			} 

		}else{
			echo "<li class='list-group-item'>Not Found.</li>";
		}

	}
?>