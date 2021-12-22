<?php
$name = $_POST['name'];
$apellido = $_POST['apellido'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$invest = $_POST['invest'];
$message = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " " . $apellido ." \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Teléfono de contacto: " . $phone . " \r\n";
$message .= "Opción elegida: " . $invest . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'inversor@milenion.com';
$asunto = 'Soy Inversor en español';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:gracias.html");
?>