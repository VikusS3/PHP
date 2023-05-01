<?php

if($_POST){
    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

    //operador logico && (and)
    if(($valorA != $valorB) && ($valorA > $valorB)){
        echo "El valor A es mayor que el valor B";
    }

    //operador logico || (or)
    if(($valorA!=$valorB) || ($valorA>$valorB)){
        echo "el valor A es diferente al valor B";
    }
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
    
    <form action="ejercicio10.php" method="post">
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