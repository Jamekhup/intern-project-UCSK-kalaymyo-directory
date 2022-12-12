<?php 
session_start();
if (empty($_SESSION['admin'])) {
    header("Location:index.php");
  } ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php include('inc/head.php'); ?>
 <link rel="stylesheet" href="css/main.css">

</head>
<body class="hold-transition skin-blue sidebar-mini">
  <header class="main-header">
      <?php include('inc/nav.php'); ?>
  </header>
  <aside class="main-sidebar">
    <?php include('inc/aside.php'); ?>
    </aside>
	<div class="container">
		<div class="col-md-6 col-md-offset-3">
			
			<h3 class="text-center">Create Category</h3>
			<form action="CreateCategoryProcess.php" method="POST">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Enter Category Name" name="CategoryName">
				</div>
				
				<div class="cancel">
                  <input class="btn btn-success btn-lg" type="submit" name="submit" value="Add Category">
                 <a href="Category.php"> <button onclick="cancel()" class="btn btn-danger btn-lg cancel-btn" type="button">Cancel</button></a>
        </div>
			</form>
		</div>
	</div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<?php include('inc/footer.php'); ?>  
	</div>
</body>
</html>
<style>
	 	.container {margin-top: 50px;}
</style>