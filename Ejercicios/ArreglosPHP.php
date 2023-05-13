<?php
$frutas=array("manzana","pera","uva","mango","fresa","sandia","melon","naranja","piña","durazno");
$carros=array("t"=>"toyota","m"=>"mazda","h"=>"honda","c"=>"chevrolet");

//leer el arreglo
print_r($frutas);
echo "<BR>";
print_r($carros);
echo "<BR>";
echo $carros["t"];
echo "<BR>";
echo "<BR>";
//el foreach recorre el arreglo y lo muestra por su clave y valor
foreach($carros as $clave=>$valor){
    echo "clave: ".$clave." valor: ".$valor."<BR>";
}

echo "<BR>";
//recorrer el arreglo
for($i=0;$i<count($frutas);$i++){
    echo $frutas[$i]."<BR>";
}

?>