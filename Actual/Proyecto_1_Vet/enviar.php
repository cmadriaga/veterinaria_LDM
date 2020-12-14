<?php

// llamamos a los campos
$nombre = $_POST['user'];
$nombre1 = $_POST['user1'];
$telefono = $_POST['telefono'];
$correo = $_POST['email'];
$mensaje = $_POST['mensaje'];

// datos para el correo

$destinatario ="leomedvet1987@gmail.com";
$asunto="Contacto desde nuestra web";
$carta = "De:$nombre \n";
$carta .= "Paciente:$nombre1 \n";
$carta .= "telefono:$telefono \n";
$carta .= "email:$correo \n";
$carta .= "mensaje:$mensaje ";

// enviando mensaje
mail($destinatario, $asunto, $carta);
header('location:mensaje-de-envio.html')
?>
