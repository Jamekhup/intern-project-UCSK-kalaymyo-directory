<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Login</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="Shortcut Icon" href="Img/admin.png">
</head>
<body>
	<div class="container">
		<div class="col-md-6 col-md-offset-3">
			 <?php 
                  if (isset($_SESSION['Login_Failed'])) {
               ?>
                  <div class="alert alert-info alert-dismissible fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <p class="text-center">Hey whatsup man??!...</p>
                  </div>
               <?php     
                 unset($_SESSION['Login_Failed']);
                  }
               ?>
			<h3 class="text-center">Admin Login</h3>
			<form action="LoginProcess.php" method="POST">
				<div class="form-group">
					<input type="email" class="form-control" placeholder="Enter Your Email" name="AdminMail">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" placeholder="Enter Your Password" name="AdminPwd">
				</div>
				<div class="form-group  text-center">
				<input class="btn btn-lg btn-info " type="submit" name="submit" value="Login">
				</div>
				<div class="form-group  text-center">
				<small><a href="reset-password.php">Forgot Password? </a></small>
				</div>
				



				
				s
				
			</form>
		</div>
	</div>
	
</body>
</html>
<style>
	 	.container {margin-top: 50px;}
</style>