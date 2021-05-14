<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$edad = $_POST['telefono'];
$comentarios = $_POST['texto'];
$to = 'facontarino@gmail.com';
$email_subject = "Nuevo mensaje: de la web";
$email_body = "Haz recibido un nuevo mensaje. \n <strong>Nombre:</strong> $nombre \n Correo:
$email
\n Mensaje o consulta: \n $comentarios \n";
$headers = "From: $email";
mail($to, $email_subject, $email_body, $headers);
echo 'Pronto nos estaremos comunicando con usted!'
?>