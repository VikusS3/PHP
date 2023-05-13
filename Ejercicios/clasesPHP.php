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

$objAlumno = new persona();//con new se crea un objeto tambien se le llama instancia
$objAlumno2 = new persona();//con new se crea un objeto tambien se le llama instancia

$objAlumno->asignarNombre("Saul");//llamada al metodo
$objAlumno2->asignarNombre("Juan");//llamada al metodo

echo $objAlumno->mostrarEdad();



$objAlumno->imprimirNombre();//llamada al metodo
echo $objAlumno->nombre; //impresion de la propiedad
echo "<br>";
echo $objAlumno2->nombre; //impresion de la propiedad

?>