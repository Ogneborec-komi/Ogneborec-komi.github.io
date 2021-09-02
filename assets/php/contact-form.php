<?php

	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$phone = trim($_POST['phone']);
	$subject = trim($_POST['subject']);
	$message = trim($_POST['message']);
	$file = trim($_POST['sendFile']);
	$privacy = trim($_POST['privacy_policy'])
	
	$emailTo = 'Ogneborec-buh@mail.ru';
	if (empty($subject)) {
	    $subject = 'Сообщение с сайта ООО "Огнеборец".';
	}
	$body = "ФИО: $name \n\nEmail: $email \n\nТелефон: $phone \n\nСообшение:\n$message \n\nПриложение: $file \n\nОбработка данных: $privacy";
	$headers = 'От: '.$email."\r\n" .
        'Ответить: '.$email."\r\n";

	mail($emailTo, $subject, $body, $headers);
	$emailSent = true;
	echo ('Отправлено');
	
	
?>
