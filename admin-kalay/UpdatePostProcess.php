<?php 
session_start();
if (empty($_SESSION['admin'])) {
    header("Location:index.php");
  } ?>

<?php  

	session_start();
	require_once("dbcon.php");

	if(isset($_POST['update'])){
		$Name=mysqli_real_escape_string($connection,$_POST['Name']);
		$Address=mysqli_real_escape_string($connection,$_POST['Address']);
		$PhoneNumber=mysqli_real_escape_string($connection,$_POST['PhoneNumber']);
		$CategoryName=mysqli_real_escape_string($connection,$_POST['CategoryName']);
		$Description=mysqli_real_escape_string($connection,$_POST['Description']);

		
		$update_id=mysqli_real_escape_string($connection,$_POST['update_id']);
		

		if($Name=='' || $Address==''  || $PhoneNumber=='' || $CategoryName=='') {
			header('location:UpdatePost.php');
			
		}else {

			
			

					$query ="UPDATE post SET Name='$Name', Address='$Address', PhoneNumber='$PhoneNumber', Category='$CategoryName', Description='$Description' WHERE id='$update_id' ";
						if (mysqli_query($connection, $query)) {
							$_SESSION['update_success'] = true;
							header('location:Dashboard.php');
							
						}else { 
							echo 'failed to upload';
						}

						
					
					
				
		}
	}else{
		header("location:Dashboard.php");
	}
?>
		