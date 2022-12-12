<?php 
session_start();
if (empty($_SESSION['admin'])) {
    header("Location:index.php");
  } ?>

<?php 
	session_start();
	require_once("dbcon.php");
	if (isset($_POST['submit'])) {
		$AdminName=mysqli_real_escape_string($connection,$_POST['AdminName']);

		$AdminEmail=mysqli_real_escape_string($connection,$_POST['AdminEmail']);

		$AdminPwd=mysqli_real_escape_string($connection,$_POST['AdminPassword']);

		if ($AdminName==''|| $AdminEmail=='' || $AdminPwd=='') {
			
			
			header("Location:CreateAdmin.php");

			
		}else{
			$EncryptedPwd=md5($AdminPwd);

			$query ="INSERT INTO admin_category(AdminName,AdminEmail, AdminPassword) VALUES('$AdminName','$AdminEmail','$EncryptedPwd')";
			
			if (mysqli_query($connection, $query)) {
				header('location:Admins.php');
		
		}else { 
			echo 'failed';
	  }
    }
   }
 ?>