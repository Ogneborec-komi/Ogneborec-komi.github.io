<?php

	//header('Set-Cookie: cross-site-cookie=name; SameSite=None; Secure');
	
	// Set a same-site cookie for first-party contexts
	//setcookie('cookie1', 'value1', ['samesite' => 'Lax']);
	// Set a cross-site cookie for third-party contexts
	//setcookie('cookie2', 'value2', ['samesite' => 'None', 'secure' => true]);
	//setcookie( "TestCookie", $value, strtotime( '+30 days' ) );
	//setcookie('name', 'content', 1);

	//$arr_cookie_options = array (
		//'expires' => time() + 60*60*24*30,
		//'path' => '/',
		//'domain' => '.example.com', // leading dot for compatibility or use subdomain
		//'secure' => true,     // or false
		//'httponly' => true,    // or false
		//'samesite' => 'None' // None || Lax  || Strict
		//);
	//setcookie('TestCookie', 'The Cookie Value', $arr_cookie_options);
	
	//$domain = ($_SERVER['HTTP_HOST'] != 'localhost') ? $_SERVER['HTTP_HOST'] : false;
	//setcookie('cookiename', 'data', time()+60*60*24*365, '/', $domain, false);

	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$phone = trim($_POST['phone']);
	$subject = trim($_POST['subject']);
	$message = trim($_POST['message']);
	
	$emailTo = 'Ogneborec-buh@mail.ru';
	if (empty($subject)) {
	    $subject = 'Сообщение с сайта ООО "Огнеборец".';
	}
	$body = "Name: $name \n\nEmail: $email \n\nPhone: $phone \n\nMessage:\n$message";
	$headers = 'From: '.$email."\r\n" .
        'Reply-To: '.$email."\r\n";

	mail($emailTo, $subject, $body, $headers);
	$emailSent = true;
	echo ('Отправлено');
	
	
?>
