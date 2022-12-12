<?php  
	
	$name = htmlentities($_POST['name']);
	$email = htmlentities($_POST['email']);
	$subject = htmlentities($_POST['subject']);
	$sms = htmlentities($_POST['sms']);	


	if ($name == null || $emial == null || $subject == null || $sms == null) {
		header('location:contact.php');
	}else{
		//send confirmation email
		$to = "info@myanmarwebshare.com";
		$subject = "verify your account";

		$message = '<html><body>
						
						"<p>Name :'.$name.'</p>";
						"<p>Email :'.$email.'</p>";
						"<p>Subject :'.$subject.'</p>";
						"<p>Sms :'.$sms.'</p>";
					</body></html>';

		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= 'From: <Noreply:kalaymyodirectory.com>' . "\r\n";

					
		mail($to,$subject,$message,$headers);

		echo "Thanks you contacting us. We will reply soon";
	}

			
?>