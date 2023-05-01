<?php
$jsonContenido='[ 

    {"nombre":"Oscar", "apellido":"roberto"},
    {"nombre":"Raul", "apellido":"Aliaga"},
    {"nombre":"Juan", "apellido":"Perez"}
    ]';

    $resultado=json_decode($jsonContenido);
    //print_r($resultado);

    echo "<br><br>";

    foreach($resultado as $persona){
        echo($persona->nombre)." ". ($persona->apellido)."<br>";
    }
?>