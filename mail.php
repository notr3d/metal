<?php
	echo "<pre>";
		$constructorMail = $_POST;
		print_r($constructorMail);
	echo "</pre>";

	$to      = 'lxmrrr@gmail.com';
	$subject = 'the subject';
	$message = 'hello';
	$headers = 'From: webmaster@example.com' . "\r\n" .
	'Reply-To: webmaster@example.com' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();
	mail($to, $subject, $message, $headers);
?>