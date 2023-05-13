<?php
//el sesion_start() debe ir antes de cualquier salida de texto
session_start();

//las variables de sesion se crean con el nombre de la variable y el valor
$_SESSION['usuario'] = "Saul";
$_SESSION['estatus'] = "Logeado";

echo "Sesion iniciada"."<br>";

echo "Usuario: ".$_SESSION['usuario']." estatus ".$_SESSION['estatus']."<br>";
?>