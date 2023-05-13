<?php

class UnaClase{
    
    public static function metodoEstatico(){
        echo "Hola soy un metodo estatico";
    }
}

//accesso a un metodo estatico primero se llama a la clase y despues al metodo
UnaClase::metodoEstatico()
?>