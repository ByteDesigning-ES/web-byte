<?php
	if(isset($_POST['email'])) {
	$email_to = "unamaslobo@gmail.com";
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
	}
?>