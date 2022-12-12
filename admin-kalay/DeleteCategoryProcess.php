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
		$delete= "DELETE FROM create_category WHERE id='$id'";

		$connect= mysqli_query($connection,$delete);

		if ($connect) {
			$_SESSION['delete']=true;
			header("Location:Category.php");
			
		}
	}else{
		header("Location:DeleteCategoryProcess.php");
	}
?>