<?php

class persona{

    //encapsulamiento
    public $nombre;//atributo o propiedad
    private $edad;//atributo o propiedad
    protected $sexo;//atributo o propiedad

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

class trabajador extends persona{

    public $puesto;

    public function presentarTrabajador(){
        echo "Hola soy ".$this->nombre." y soy ".$this->puesto;
    }
}

//$objTrabajador = new trabajador();//con new se crea un objeto tambien se le llama instancia
$objTrabajador->asignarNombre("Saul");
$objTrabajador->puesto="Programador";
$objTrabajador->presentarTrabajador();


?>