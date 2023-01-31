<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$sexo = $_POST['sexo'];
$musica = $_POST['musica'];
$teatro = $_POST['teatro'];
$turismo = $_POST['turismo'];
$deportes = $_POST['deportes'];
$gastronomia = $_POST['gastronomia'];
$otros = $_POST['otros'];

$intereses = "<p>".$musica."<p>";
$intereses .= "<p>".$teatro."<p>";
$intereses .= "<p>".$turismo."<p>";
$intereses .= "<p>".$deportes."<p>";
$intereses .= "<p>".$gastronomia."<p>";
$intereses .= "<p>".$otros."<p>";

$comentarios = "<h1>".$nombre."</h1>";
$comentarios .= "<h2>".$apellido."</h2>";
$comentarios .= "<p> El usuario es: ".$sexo. "</p>";
$comentarios .= "<p> Los interes son: ".$intereses."</p>";
$comentarios .= "<hr />";
$comentarios .= $_POST['comentarios'];

$para = 'nmsantaana1994@gmail.com';
$asunto = 'Contacto desde la web';
$headers = "Mime-version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $email\r\n";
$headers .= "To: $para\r\n";

mail ($para, $asunto, $comentarios, $headers);
header ("Location: gracias.html");

?>