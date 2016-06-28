<?php

if($_POST) {
	
$to_email   = "lxmrrr@gmail.com"; 
$from_email = "noreply@bigspb.com"; 

$subject = "Письмо с сайта bigspb.com";
$name    = $_POST["contacts-name"];
$email   = $_POST["contacts-email"];
$tel     = $_POST["contacts-tel"];
$message = $_POST["contacts-message"];

$message_body = 
	"Имя: ".$name.
	"\n"."Почта: ".$email;
	if ($tel !='') {
		$message_body .= "\n"."Телефон: ".$tel;
	}
	if ($message !='') {
		$message_body .= "\n\n"."Сообщение: ".$message;
	}

$file_attached = false;
if(isset($_FILES['contacts-file'])) {
	$file_tmp_name = $_FILES['contacts-file']['tmp_name'];
	$file_name 	   = $_FILES['contacts-file']['name'];
	$file_size 	   = $_FILES['contacts-file']['size'];
	$file_type 	   = $_FILES['contacts-file']['type'];
	$file_error    = $_FILES['contacts-file']['error'];

	$handle = fopen($file_tmp_name, "r");
	$content = fread($handle, $file_size);
	fclose($handle);
	$encoded_content = chunk_split(base64_encode($content));
	$file_attached = true;
}


if ($file_attached) {
	$boundary = md5("sanwebe"); 

	$headers = "MIME-Version: 1.0\r\n"; 
	$headers .= "From:".$from_email."\r\n"; 
	$headers .= "Reply-To: ".$email."" . "\r\n";
	$headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n"; 

	$body = "--$boundary\r\n";
	$body .= "Content-Type: text/plain; charset=UTF-8 \r\n";
	$body .= "Content-Transfer-Encoding: base64\r\n\r\n"; 
	$body .= chunk_split(base64_encode($message_body)); 

	$body .= "--$boundary\r\n";
	$body .="Content-Type: $file_type; name=\"$file_name\"\r\n";
	$body .="Content-Disposition: attachment; filename=\"$file_name\"\r\n";
	$body .="Content-Transfer-Encoding: base64\r\n";
	$body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
	$body .= $encoded_content; 
} else {
	$headers = "From:".$from_email."\r\n".
	'Reply-To: '.$email.'' . "\n" .
	'X-Mailer: PHP/' . phpversion();
	$body = $message_body;
}

$send_mail = mail($to_email, $subject, $body, $headers);   

}

?>