<?php
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

echo $nombre. " email: ".$mail."</br>"." Envia el siguiente mensaje: </br>".$mensaje; 

//$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
//$mensaje .= "Su e-mail es: " . $mail . " \r\n";
//$mensaje .= "Mensaje: " . $_POST['contactMessage'] . " \r\n";
//$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'leorodriguez246@gmail.com';

if (mail($para, $asunto, $mensaje)) {
    echo "E-mail enviado";
}else{
    echo "E-mail no enviado";
}

//header("Location:index.html");

?>