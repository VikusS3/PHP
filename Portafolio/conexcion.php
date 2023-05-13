<?php

class conexcion
{

    private $servidor = "localhost";
    private $usuario = "root";
    private $password = "";
    private $conexcion;


    public function __construct()
    {
        try {
            $this->conexcion = new PDO("mysql:host=$this->servidor;dbname=album", $this->usuario, $this->password);
            $this->conexcion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            return "Error en la conexion" . $e->getMessage();
        }
    }

    public function ejecutar($sql){
        $this->conexcion->exec($sql);
        return $this->conexcion->lastInsertId();
    }

}
