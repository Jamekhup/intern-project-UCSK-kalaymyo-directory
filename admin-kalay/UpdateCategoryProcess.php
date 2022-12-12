<?php 
session_start();
if (empty($_SESSION['admin'])) {
    header("Location:index.php");
  } ?>

<?php  

	
	require_once("dbcon.php");

	if(isset($_POST['update'])){
		$Name=mysqli_real_escape_string($connection,$_POST['Name']);
		
		
		$update_id=mysqli_real_escape_string($connection,$_POST['update_id']);
		

		if($Name=='') {
			header('location:UpdateCategory.php');
			
		}else {

					$query ="UPDATE create_category SET Name='$Name'WHERE id='$update_id' ";
						if (mysqli_query($connection, $query)) {
							$_SESSION['update_success'] = true;
							header('location:Category.php');
							
						}
						
					}
		
	}else{
		header("location:UpdateCategory.php");
	}
?>
		