<?php  
	
	if (isset($_GET['reset'])) {
		require_once('dbcon.php');
		$key = $_GET['reset'];
		$selectkey = "SELECT * FROM admin WHERE reset_key='$key'";
		$keyQuery = mysqli_query($connection,$selectkey);
		if ($keyQuery->num_rows > 0) {
			$forkey = mysqli_fetch_assoc($keyQuery);
			$keylink = $forkey['reset_key'];
			$keyid = $forkey['id'];

			if ($key !== $keylink){
				header('location:index.php');
			}else{
			?>
				<!DOCTYPE html>
				<html lang="en">
				<head>
					<?php include('inc/resetHead.php'); ?>
				</head>
				<body>
					<nav class="navbar navbar-expand-lg navbar-light bg-success sticky-top">
					 
					</nav>
					<br>
					<br>
					<br>
					<div class="container">
						<div class="col-md-6 offset-md-3">
							<div id="text"></div>
							<h4 class="text-center">Enter the five digit which had been sent to your email</h4>
							<form class="resetForm">
								<div class="form-group">
									<input type="text" name="code" class="form-control" id="code" placeholder="Enter 6 digit code">
								</div>
								<input type="hidden" value="<?php echo $keyid; ?>" id="keyid">
								<button type="submit" class="btn btn-info" name="submit">Submit</button>

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
					<br>
					<?php include('inc/footer.php'); ?>

					<script>
						$(document).ready(function(){
							$('.resetForm').on('submit',resetProcess);

							function resetProcess(e){
								e.preventDefault();
								let getCode = $('#code').val();
								let keyid = $("#keyid").val();
								if (!getCode) {
									alert('Cannot be empty');
								}else{
									$.ajax({
										method:"POST",
										url:"passResetProcess.php",
										data:{code:getCode,keyid:keyid},

										success:function(successText){
											window.location.assign('change-pass.php');
										}
									});
								}
							}
						});
					</script>
					
				</body>
				</html>
			<?php
			}
		}else{
			header('location:index.php');
		}
	}else{
		header('location:index.php');
	}

?>
