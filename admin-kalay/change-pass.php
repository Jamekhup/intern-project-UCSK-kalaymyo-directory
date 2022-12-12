<?php  
	session_start();
	if (empty($_SESSION['reset'])) {
		header('location:index.php');
	}else{
		require_once('dbcon.php');
		$catSql= "SELECT * FROM admin";
		$mycat = mysqli_query($connection,$catSql);
	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<?php include('inc/resetHead.php'); ?>
	</head>
	<body>
		
		<br>
		<br>
		<div class="container">
			<div class="col-md-6 offset-md-3">
				<div id="pass"></div>
				<h3 class="text-center">Change Your Password</h3>
				<form class="changeForm">
					<div class="form-group">
						<input type="password" id="pwd" placeholder="New Password" class="form-control">
					</div>
					<div class="form-group">
						<input type="password" id="repeat_pwd" placeholder="Confirm Password" class="form-control">
					</div>
					<input type="hidden" value="<?php echo $_SESSION['passId']; ?>" id="passId">
					<button class="btn btn-info" type="submit">Submit</button>
				</form>
			</div>
		</div>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<?php include('inc/footer.php'); ?>
		<script>
			$(".changeForm").on('submit',changePass);
			function changePass(e){
				e.preventDefault();
				let pwd = $("#pwd").val();
				let repeat_pwd = $("#repeat_pwd").val();
				let passId = $("#passId").val();

				if(!pwd || !repeat_pwd){
					alert("Cannot be empty");
				}else{
					if (pwd != repeat_pwd) {
						alert("Password Not Match");
					}else{
						$.ajax({

							method:"POST",
							url:"changePassProcess.php",
							data:{pass:pwd,passId:passId},

							success:function(passChanged){
								$("#pass").html(passChanged);
							}
						});
					}
				}
			}
		</script>
	</body>
	</html>
	<?php
	}
?>
