<?php


if (isset($_POST['submit'])) {
	
	$name = $POST['name'];
	$mailFrom = $POST['email'];
	$message = $_POST['message'];
	
	$mailTo = "haniebnyxd2@gmail.com";
	$headers = "Od: ".$mailFrom;
	$txt = "Otrzymałeś wiadomość od ".$name.".\n\n".$message;
	
	
	mail($mailTo, $txt, $headers);
	header("Location: index.php?mailsend");
	
}