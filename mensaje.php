<?php
if(isset($_POST['email'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "davidpinon@dbflore.com";
$email_subject = "Contacto DBFlore";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['name']) ||
!isset($_POST['email']) ||
!isset($_POST['message']) ||
!isset($_POST['subject'])) {

echo '<script type="text/javascript">',
				'toastr.warning("Ocurrio un inconveniente, favor de intentarlo de nuevo.");',
     '</script>'
;
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['name'] . "\n"; //first_name
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Asunto: " . $_POST['subject'] . "\n";
$email_message .= "Mensaje: " . $_POST['message'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo '<script type="text/javascript">',
				'toastr.success("Mensaje enviado con exito, en un momento recibiras un correo de confirmacion.");',
     '</script>'
;
}
?>