<?php
	echo "<pre>";
		print_r($_POST);
	echo "</pre>";

	$to      = 'lxmrrr@gmail.com';
	$subject = 'Заказ на постройку здания';
	$message = '
		<html>
			<head>
				<title>'.$subject.'</title>
			</head>
			<body>
				<h1>'.$subject.'</h1>
				<h2>Основные параметры</h2> 
				<p>Тип здания: '.$_POST['structure-type'].'</p> 
				<p>Ширина: '.$_POST['widthInput'].'</p>                     
				<p>Длина: '.$_POST['lengthInput'].'</p>                     
				<p>Высота: '.$_POST['heightInput'].'</p>                     
				<p>Снеговой район строительства: '.$_POST['snow'].'</p> 
				<p>Стеновая обшивка: '.$_POST['wall-shealthing'].'</p>                     
				<p>Кровельная обшивка: '.$_POST['roof-shealthing'].'</p>                     
				<h2>Дополнительные параметры:</h2>                    
				<p>Город: '.$_POST['city'].'</p>                     
				<p>Внешняя темпиратура: '.$_POST['t-out'].'</p>                     
				<p>Внутренняя темпиратура: '.$_POST['t-in'].'</p>                                          
				<p>Сопротивление стен: '.$_POST['Rpr-wall'].'</p>                     
				<p>Сопротивление кровли: '.$_POST['Rpr-roof'].'</p> 
				<h2>Внешний вид</h2>                    
				<p>Цвет стен: '.$_POST['wallColor'].'</p>                     
				<p>Цвет кровли: '.$_POST['roofColor'].'</p>                     
				<p>Цвет нащельников: '.$_POST['lippingColor'].'</p>                     
				<p>Цвет водостока: '.$_POST['drainColor'].'</p>                     
				<p>Количество светопрозрачных участков кровли: '.$_POST['translucent-roof-areas-quantity'].'</p>                     
				<p>Размеры светопрозрачных участков кровли: '.$_POST['tra-dim'].'</p>                     
				<p>Количество дверей: '.$_POST['door-quantity'].'</p>                     
				<p>Размеры дверей: '.$_POST['door-dim'].'</p>                     
				<p>Количество ворот: '.$_POST['gate-quantity'].'</p>                     
				<p>Размеры ворот: '.$_POST['gate-dim'].'</p>                     
				<p>Количество окон: '.$_POST['window-quantity'].'</p>                     
				<p>Размеры окон: '.$_POST['window-dim'].'</p>  
				<h2>Контактная информация</h2>                   
				<p>Имя: '.$_POST['name'].'</p>                     
				<p>Компания: '.$_POST['company-name'].'</p>                     
				<p>Телефон: '.$_POST['tel'].'</p>                     
				<p>Электронная почта: '.$_POST['mail'].'</p>                     
				<p>Сообщение: '.$_POST['message'].'</p>                     
				<p>Желаемый срок исполнения: '.$_POST['period'].'</p>                     
			</body>
		</html>
		';
	$headers = 'Content-type: text/html; charset=utf-8 \r\n' .
	'From: webmaster@example.com' . "\r\n" .
	'Reply-To: webmaster@example.com' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();
	mail($to, $subject, $message, $headers);
?>
