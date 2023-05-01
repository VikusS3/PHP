<?php

// Datos de acceso a la base de datos


$host = "localhost"; // o el nombre del servidor MySQL
$user = "root"; // el nombre de usuario de MySQL
$password = "123456789"; // la contraseña de MySQL
$database = "albun"; // el nombre de la base de datos de MySQL

// Conectamos con el servidor MySQL con PDO
try{
    $conexcion=new PDO("mysql:host=$host;dbname=$database",$user,$password);
    $conexcion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexcion->exec("SET CHARACTER SET utf8");

    $sql="select * from fotos";
    $sentencia=$conexcion->prepare($sql);
    $sentencia->execute();

    $resultado=$sentencia->fetchAll();

    //print_r($resultado);

    foreach($resultado as $foto){
        print_r($foto['nombre']);
    }


}catch(PDOException $e){
    echo "Error: ".$e->getMessage();
}



?>


