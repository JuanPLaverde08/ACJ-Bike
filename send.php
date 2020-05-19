<?php
error_reporting(0);
$nombre = $_POST['nombre'];
$correo_electronico= $_POST['email'];
$descripcion= $_POST['mensaje'];
$telefono= $_POST['telefono'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$metodo = $_POST['contacto'];

$header = 'From: ' . $correo_electronico . "\r\n";


$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";
$mensaje .= "Su e-mail es: " . $correo_electronico . " \r\n";
$mensaje .= "Telefono de contacto:". " " . $telefono . " \r\n";
$mensaje .= "para ser contactado: " . " Fecha: " . $fecha ." Hora:". " " . $hora ." \r\n";
$mensaje .= "deseo ser contactado por". " "  . $metodo . "\r\n" ; 
$mensaje .= 'Mensaje:' . $descripcion . "\r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());


$para = 'juan_laverde82162@elpoli.edu.co';
$asunto = 'A.C.J Bike';

mail($para, $asunto, utf8_decode($mensaje), $header);

header('location: index.html');

?>