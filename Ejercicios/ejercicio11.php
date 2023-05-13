<?php
    if($_POST){

        $boton=$_POST['btnValor'];

        //instruccion switch
        switch($boton){
            case "Valor1":
                echo "Valor1";
                break;
            case "Valor2":
                echo "Valor2";
                break;
            case "Valor3":
                echo "Valor3";
                break;
            default:
                echo "No se ha seleccionado ningun valor";
                break;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

     <form action="ejercicio11.php" method="post">
        
        <input type="submit" name="btnValor" value="Valor1">
        <br>
        <input type="submit" name="btnValor" value="Valor2">
        <br>
        <input type="submit" name="btnValor" value="Valor3">

     </form>   
</body>
</html>