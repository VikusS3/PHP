<?php

class Conexion {
    private $servidor = "localhost";
    private $usuario = "root";
    private $contrasena = "123456789";
    private $conexion;

    public function __construct() {
        try {
            $this->conexion = new PDO("mysql:host=$this->servidor;dbname=albun", $this->usuario, $this->contrasena);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Fallo la conexión: " . $e->getMessage();
            exit();
        }
    }

    public function ejecutar($sql) {
        if ($this->conexion) {
            $this->conexion->exec($sql);
            return "Registro Guardado";
        } else {
            return "Error: No se pudo ejecutar la consulta debido a una conexión fallida";
        }
    }

    public function consultar($sql){
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }
}
