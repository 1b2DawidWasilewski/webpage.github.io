<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];
	
	$email_from = 'HaniebnyXD2@gmail.com';
	
	$email_subject = "New From Submission";
	
	$email_body = "Imię użytkownika: $name.\n".
					"E-mail: $visitor_email.\n".
					"Wiadomość: $message.\n";
	
	$to = "HaniebnyXD@gmail.com";
	
	$headers = "From: $email_from \r\n";
	
	$headers .= "Reply-To: $visitor_email \r\n";
	
	mail($to,$email_subject,$email_body,$headers);
	
	header("Location: kontakt.html");


?>