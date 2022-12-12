<?php 
	session_start();
	require_once("dbcon.php");
	if (isset($_POST['submit'])) {
		$AdminMail=mysqli_real_escape_string($connection,$_POST['AdminMail']);
		$AdminPwd=mysqli_real_escape_string($connection,$_POST['AdminPwd']);
		if ($AdminMail=='' || $AdminPwd=='') {
			$_SESSION['Login_Failed']=true;
			
			header("Location:index.php");
			

			
		}else{
			$EncryptedPwd=md5($AdminPwd);
			$select="SELECT * FROM admin WHERE Email='$AdminMail' AND Password='$EncryptedPwd' ";
			$connect=mysqli_query($connection,$select);
			if ($connect->num_rows>0) {
				while ($pass=$connect->fetch_assoc()) {

				    $_SESSION["admin"]=$pass['id'];
				    $_SESSION["name"]=$pass['AdminName'];
				    header("Location:Dashboard.php");
				}
				
			}else{
				$_SESSION['Login_Failed']=true;
				header("Location:index.php");
				
			}
		}
	}
 ?>