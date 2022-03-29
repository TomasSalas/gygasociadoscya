<?php

/* $nombre = ($_POST['nombre']);
$contacto = ($_POST['contacto']);
$mensaje = ($_POST['mensaje']); */

$nombre = "TOmas";
$contacto = "Salas";
$mensaje = "asdasdasdasd";

$correo_de = "tsalasarancibia@gmail.com"; 
$Titulo = "Formulario de contacto del sitio web";
$body = "Ha recibido un nuevo mensaje del formulario de contacto de su sitio web.\n\n"."Aquí están los detalles:\n\nNombre: $nombre\n\nContacto: $contacto
 Mensaje:\n$mensaje";
$header = "From: contacto@prueba.cl\n"; 
$header .= "Reply-To: $nombre";	

if(!mail($correo_de, $Titulo, $body, $header))
    $data = 1;
  else{
    $data = 2;
  }
echo $data;
?>