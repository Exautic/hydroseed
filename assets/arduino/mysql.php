<?php
    
$host = "localhost";
$user = "root";
$password = "";
$database = "hydroseed";


    $conexion = mysqli_connect($host, $user, $password);
    mysqli_select_db($conexion, $database);

    mysqli_query($conexion, "INSERT INTO 'historial_mediciones' ('id_usuario', "
            . "'id_cultivo', 'temp_ambiente', 'hum_ambiente', 'temp_disolucion', "
            . "'hora_medicion', 'fecha_medicion') VALUES ('3', '2', '". $_GET['temp_ambiente']."', '". $_GET['hum_ambiente']."', '". $_GET['temp_disolucion']."', '". $_GET[time()]."', '". $_GET[date("YYYY/MM/DD")]."' ) ")
    
?>