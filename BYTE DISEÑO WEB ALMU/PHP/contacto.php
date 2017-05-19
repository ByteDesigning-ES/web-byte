<!--<?php
	if(isset($_POST['email'])) {
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
	}
?>-->



<!-- CORREGIR ACENTOS, FUENTE: http://www.esandra.com/enviar-correo-via-php-con-codificacion-utf-8-de-acentos-y-n/

&amp;lt;?php
 function mail_utf8($to, $subject = '(No subject)', $message = '', $header = '') {
  $header_ = 'MIME-Version: 1.0' . &amp;quot;rn&amp;quot; . 'Content-type: text/plain; charset=UTF-8' . &amp;quot;rn&amp;quot;;
  mail($to, '=?UTF-8?B?'.base64_encode($subject).'?=', $message, $header_ . $header);
}
 
?&amp;gt;-->