<?php

if($_POST){
    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

    if($valorA>$valorB){
        echo "El valor A es mayor que el valor B";
    }else if($valorA<$valorB){
        echo "El valor A es menor que el valor B";
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
    
    <form action="ejercicio9.php" method="post">
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