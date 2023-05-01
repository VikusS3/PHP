<?php

use persona as GlobalPersona;

class persona{

    //encapsulamiento
    public $nombre;//atributo o propiedad
    private $edad;//atributo o propiedad
    protected $sexo;//atributo o propiedad

    //cpnstructor
    function __construct($nuevoNombre)
    {
        $this->nombre=$nuevoNombre;
    }

    public function asignarNombre($nuevoNombre){ //metodo o acciones
        $this->nombre=$nuevoNombre;
    }

    public function imprimirNombre(){
        echo "Hola Soy ".$this->nombre;
    }

    public function mostrarEdad(){
        $this->edad=20;
        return $this->edad;
    }
}


$objPersona = new persona("Saul Orellana");//con new se crea un objeto tambien se le llama instancia
//$objPersona->asignarNombre("Saul");//llamada al metodo
$objPersona->imprimirNombre();//llamada al metodo

?>