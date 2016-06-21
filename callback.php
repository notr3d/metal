<?php

echo "<pre>";
	print_r($_POST);
echo "</pre>";

$to      = 'lxmrrr@gmail.com';
$subject = 'Заказ на обратный звонок с сайта bigspb.com';
$message = '
	<html>
		<head>
			<title>'.$subject.'</title>
		</head>
		<body>
			<h1>'.$subject.'</h1>			            
			<p>Имя: '.$_POST['name'].'</p>                     
			<p>Телефон: '.$_POST['tel'].'</p>                     
			<p>Почта: '.$_POST['email'].'</p>                
		</body>
	</html>
';

$headers = 'Content-type: text/html; charset=utf-8 \r\n' .
'From: webmaster@example.com' . "\r\n" .
'Reply-To: webmaster@example.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);

?>
