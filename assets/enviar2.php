<?php

$email_to = "hydroseed2019@gmail.com";
$nombre = $_POST['nombre'];
$email_from = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$contenido = "Autor del mensaje: " . $nombre . "\nE-mail: " .$email_from . "\nMensaje: ". $mensaje .".";

mail($email_to, $asunto, $contenido);

header("Location: http://localhost/ProyectoHydroseed");

Materialize.toast("Mensaje enviado.", "10000");
?>