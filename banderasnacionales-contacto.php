<?php
// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "info@efrix.net"; //Direcciones a las que se enviara el correo
$email_from ="noreply@banderasnacionales.com.mx"; //Direccion que quieras que le aparezca al cliente
$email_subject = "Formulario desde sitio web"; //Asunto
$email_bcc = "info@efrix.net, webmaster@morraldeyute.com"; //Direcciones copias ocultas
// Variables del mensaje
$nombre = $_POST['nombre'];
$telefono =  $_POST['telefono'];
$correo =  $_POST['correo'];
$mensaje =  $_POST['mensaje'];
$contenido=
"Nombre : " . $nombre .
"\nCorreo : " . $correo .
"\nTelefono : " . $telefono .
"\nMensaje : " . $mensaje;
$header =
'From: '.$email_from."\r\n".
'Bcc: ' .$email_bcc. "\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $contenido, $header);
header("Location:http://banderasnacionales.com.mx");
?>
