<?php 
session_start();
if (empty($_SESSION['admin'])) {
    header("Location:index.php");
  } ?>
<?php 
	session_start();
	require_once("dbcon.php");


	if (isset($_GET['id'])) {
		$id=$_GET['id'];
		$delete= "DELETE FROM admin_category WHERE id='$id'";

		$connect= mysqli_query($connection,$delete);

		if ($connect) {
			$_SESSION['delete']=true;
			header("Location:Admins.php");
			
		}
	}else{
		header("Location:DeleteAdminProcess.php");
	}
?>