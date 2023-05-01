<?php

session_start();

if (isset($_SESSION['usuario'])) {
    echo "Sesion iniciada"."<br>";
} else {
    echo "Sesion no iniciada"."<br>";
}
?>