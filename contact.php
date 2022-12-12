<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kalemyo Business Directory-Contact</title>

	<?php include('inc/head.php'); ?>
	
	<link rel="stylesheet" href="css/contact.css">

	
</head>
<body>
	<div id="fb-root">
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/my_MM/sdk.js#xfbml=1&version=v8.0" nonce="xF2qdOPa"></script>

		<div class="area">

			<div class="container-fluid stickytop mynav">
				<div class="row">
					<div class="col-12">
						<nav class="navbar navbar-expand-lg navbar-light">
						   <?php include('inc/nav.php'); ?>
						</nav>
					</div>
				</div>
			</div>
		</div>
		
					<h1 class="text-center font-weight-bolder">Contact us</h1>

						

					
					
				
		<div class="tt"><hr></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						
	 					<h2 class="text-danger bg-warning font-italic">Form</h2>
	 					<div id="text"></div>
						<form class="sendmail">
							<div class="form-group">
								<input type="text" placeholder="Name" class="form-control" style="border:1px solid red !important;" id="name">
							</div>
							
							<div class="form-group">
								<input class="form-control" type="email" placeholder="Email or Phone" style="border:1px solid red !important;" id="email">
							</div>
							<div class="form-group">
								<input class="form-control" type="text" placeholder="Subject" style="border:1px solid red !important;" id="subject">
							</div>
							<div class="form-group">
							<textarea class="form-control" placeholder="Message" id="sms" cols="15" rows="10" style="border:1px solid red !important;"></textarea>
							</div>
							<button class="btn bg-warning btn-sm" type="submit">Submit</button>
					</form>
					<br><br>
					<div class="contact">
						
				</div>
				<div class="aa">
				<hr></div>
			</div>	
			<div class="col-md-6">	
				<h2 class="text-danger bg-warning font-italic">Find us on facebook</h2>
					<div class="fb-page " data-href="https://www.facebook.com/kalaydirectory" data-tabs="timeline,messages,events" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/kalaydirectory" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/kalaydirectory">Kalaymyo Directory</a></blockquote></div>
			</div>	
		
		</div>
		</div>

	<div class="container-fluid" id="map">
		
			<h2 class="text-center text-danger bg-warning font-italic">Find Us on Google Map</h2>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3667.4152609383355!2d94.02476501428568!3d23.191532415813338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x374b731f597bb37d%3A0xe9808b680802da30!2sMyanmar%20Web%20Share!5e0!3m2!1sen!2smm!4v1597203077389!5m2!1sen!2smm" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" alt="Responsive iframe"></iframe>
		
	</div>
	<br>
	
	
<div class="ss">
	 <?php include('inc/footer.php'); ?>
</div>
</div>

<script>
	$('.sendmail').on('submit',sendMail);

	function sendMail(e){
		e.preventDefault();

		let name = $('#name').val();
		let email = $('#email').val();
		let subject = $('#subject').val();
		let sms = $('#sms').val();

		if (!name || !email || !subject || !sms) {
			$('#text').html("<p class='alert alert-danger'>All Fields are required</p>");
		}else{

			$.ajax({
				method:"POST",
				url:"contact-sendmail.php",
				data:{name:name,email:email,subject:subject,sms:sms},
				success:function(sendText){
					$('#text').html(sendText);
					document.querySelector('.sendmail').reset();
				}
			});
		}
	}
</script>
</body>
</html>