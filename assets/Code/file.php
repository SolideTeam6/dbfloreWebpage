<?php 
$name = $_POST['name'];
$message = $_POST['message'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$filename = $_POST['filename'];

  $mensaje ="NOMBRE: ".$_POST['name']."\r\n\r\n"."CORREO: ".$_POST['email']."\t\t"."ASUNTO: ".$subject."\r\n\r\n"."MENSAJE: \r\n".$_POST['message'];
  file_put_contents($filename, $mensaje, FILE_APPEND);
  ?>