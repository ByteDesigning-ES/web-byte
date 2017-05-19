<?php
	/*if(isset($_POST['email'])) {
>>>>>>> 24ddfd4dd437e95c26fdaeace0ec779e9ad48aad
	$email_to = "info@bytedesigning.net";
	$email_subject = "Mensaje desde la web";
	
	if(!isset($_POST['first_name']) ||
	!isset($_POST['last_name']) ||
	!isset($_POST['email']) ||
	!isset($_POST['telephone']) ||
	!isset($_POST['comments'])) {
	
	echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
	echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
	die();
	}

	$email_message .= "Nombre: " . $_POST['first_name'] . "\n";
	$email_message .= "Apellido: " . $_POST['last_name'] . "\n";
	$email_message .= "E-mail: " . $_POST['email'] . "\n";
	$email_message .= "Teléfono: " . $_POST['telephone'] . "\n";
	$email_message .= "Comentarios: " . $_POST['comments'] . "\n\n";

	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	@mail($email_to, $email_subject, $email_message, $headers);

	echo "¡El formulario se ha enviado con éxito!";
<<<<<<< HEAD
	}
?>-->
=======
	}*/
	error_reporting( E_ALL & ~( E_NOTICE | E_STRICT | E_DEPRECATED ) );

	require_once "Mail.php"; 

	$Name = $_POST['first_name'];
	$LastName = $_POST['last_name'];
	$Mail = $_POST['email'];
	$Phone = $_POST['telephone'];
	$Comments = $_POST['comments'];

	$to = 'luis90madrid@gmail.com'; 
	$from = 'info@bytedesigning.net'; 
	$host = 'info.bytedesigning.net'; 
	$username = 'info@bytedesigning.net'; 
	$password = '@1234a56B'; 
	$subject = 'webmailform'; 
	$body = 'Nombre: $Name \n<br/>'.
	'Apellido/s: $LastName'
    	'Mail: $Mail \n <br />'.
    	'Tel: $Phone \n <br />'.
    	'Mensaje: $Comments \n <br />'; 

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
