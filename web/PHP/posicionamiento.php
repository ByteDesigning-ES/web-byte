<?php 
	error_reporting( E_ALL & ~( E_NOTICE | E_STRICT | E_DEPRECATED ) );

	require_once "Mail.php"; 

	$Name = $_POST['first_name'];
	$Phone = $_POST['telephone'];
	$Mail = $_POST['email'];


	$to = 'almudenamateocanton@gmail.com'; 
	$from = 'info@bytedesigning.net'; 
	$host = 'smtp.bytedesigning.net'; 
	$username = 'info@bytedesigning.net'; 
	$password = '@1234a56B'; 
	$subject = 'webmailform'; 
	$body = 'Web: $Name \n<br/>'.
    	'Tel: $Phone \n<br/>'.
    	'Mail: $Mail \n<br/>'.; 

	$headers = array ('From' => $from,
	'To' => $to,
	'Subject' => $subject);

	$smtp = Mail::factory('smtp',
	array ('host' => $host,
	'auth' => true,
	'username' => $username,
	'password' => $password));

	$mail = $smtp->send($to, $headers, $body);

	if (PEAR::isError($mail)) {
		echo(" " . $mail->getMessage() . " ");
	}
	else {
		echo "Mensaje enviado desde Web Byte a ". $to ;
	}
?>
