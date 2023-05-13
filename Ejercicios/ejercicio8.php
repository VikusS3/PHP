<?php

if($_POST){
    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

    $suma=$valorA+$valorB;
    $resta=$valorA-$valorB;
    $multiplicacion=$valorA*$valorB;
    $division=$valorA/$valorB;
    echo "La suma es: ".$suma;
    echo "<br>";
    echo "La resta es: ".$resta;
    echo "<br>";
    echo "La multiplicacion es: ".$multiplicacion;
    echo "<br>";
    echo "La division es: ".$division;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Artimecos</title>
</head>
<body>
    
    <form action="ejercicio8.php" method="post">
        ValorA:
        <input type="text" name="valorA" id="">
        <br>
        ValorB:
        <input type="text" name="valorB" id="">
        <br>
           
        <input type="submit" value="Calcular">
    </form>



</body>
</html>