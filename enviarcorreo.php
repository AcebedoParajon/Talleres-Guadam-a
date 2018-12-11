<?php
$nombre = $_POST['name'];
$mail = $_POST['email'];
$subject = $_POST['subject'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Asunto: " . $subject . " \r\n";
$mensaje .= "Mensaje: " . $_POST['message'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'autosguadamia@telefonica.net';
$asunto= 'Mensaje enviado a través del formulario de mi web';
if (mail($para,$nombre,$asunto,$mensaje,$header)){
//Si el mensaje se envía muestra una confirmación
echo '<div class="alert alert-success alert-dismissable" 
id="respuesta2" aria-hidden="true">
  <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
  Su mensaje ha sido enviado correctamente.
</div>';
}else{
//Si el mensaje no se envía muestra el mensaje de error
echo '<div class="alert alert-warning alert-dismissable" id="respuesta2" aria-hidden="true">
  <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
  <strong>¡Error!</strong> Ha habido un problema al enviar el mensaje.
</div>';
}
?>