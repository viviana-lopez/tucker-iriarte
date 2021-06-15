<?php
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];

$contenido = "Nombre: ". $nombre . 
            "\nCorreo: " . $correo . 
            "\nTelefono: " . $telefono . 
            "\nMensaje: " . $mensaje;

mail("lilith37.vl@gmail.com", $contenido);

header("location:gracias.html");

?>