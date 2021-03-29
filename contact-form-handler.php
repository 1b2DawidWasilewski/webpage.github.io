<?php


if (isset($_POST['name'])) {
	
	$name = $POST['name'];
	$mailFrom = $POST['email'];
	$message = $_POST['message'];
	
	$mailTo = "MonoChromWebpage@gmail.com";
	$headers = "Od: ".$mailFrom;
	$txt = "Otrzymałeś wiadomość od ".$name.".\n\n".$message;
	
	
	mail($mailTo, $txt, $headers);
	header('Location: kontakt.html');
	
}

?>