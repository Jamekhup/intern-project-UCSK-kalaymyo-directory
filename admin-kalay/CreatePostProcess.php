<?php 
session_start();
if (empty($_SESSION['admin'])) {
    header("Location:index.php");
  } ?>
<?php  
	
	require_once("dbcon.php");

	if(isset($_POST['submit'])){
		$Name=mysqli_real_escape_string($connection,$_POST['Name']);
		$Address=mysqli_real_escape_string($connection,$_POST['Address']);
		$PhoneNumber=mysqli_real_escape_string($connection,$_POST['PhoneNumber']);
		$CategoryName=mysqli_real_escape_string($connection,$_POST['CategoryName']);

		

		$Description=mysqli_real_escape_string($connection,$_POST['Description']);
		

		if($Name=='' || $Address==''  || $PhoneNumber=='' || $CategoryName=='') {
			header('location:CreatePost.php');
			
		}else {

			
			
					
					$stmt = $connection->prepare("INSERT INTO post(Name,Address,PhoneNumber,Category, Description) VALUES(?,?,?,?,?)");

						$stmt->bind_param("sssss", $Iname, $Iaddress, $IphoneNumber,$ICategoryName, $IDescription);

						// set parameters and execute
						$Iname = $Name;
						$Iaddress = $Address;
						$IphoneNumber = $PhoneNumber;
						$ICategoryName= $CategoryName;
						$IDescription= $Description;
						
						
						if ($stmt->execute()) {
							$_SESSION['post_success'] = true;
							header('location:Dashboard.php');

						}else { 
							echo 'failed to upload';
						}

						
				
		}
	}else{
		header("location:Dashboard.php");
	}
?>