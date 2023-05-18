<?php

if (isset($_POST['txtNumero'])) {
    $numero = $_POST['txtNumero'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios Mios</title>
</head>
<body>
    <form action="#" method="post">
        Numero:
        <input type="text" name="txtNumero" id="">
        <input type="submit" value="Enviar">
    </form>
    <br>
    tabla de multiplicar
    <form action="">
        <textarea name="txtResultado" id="" cols="30" rows="10">
           <?php
            for ($i=1; $i <= 10; $i++) { 
                echo $numero . " x " . $i . " = " . $numero * $i . "\n";
            }
           ?> 
        </textarea>
    </form>
</body>
</html>