<?php
    $txtNombre = "";
    $rdg_lenguaje="";
    $chk_php="";
    $chk_html="";
    $chk_css="";
    $lsAnime="";
    $txtComentario="";


    if($_POST){
        $txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : ""; 
        $rdg_lenguaje = (isset($_POST['lenguaje'])) ? $_POST['lenguaje'] : "";      

        $chk_php= (isset($_POST['chkphp'])=="si") ? "checked" : "";
        $chk_html=  (isset($_POST['chkhtml'])=="si") ? "checked" : "";
        $chk_css= (isset($_POST['chkcss'])=="si") ? "checked" : "";
        
        $lsAnime = (isset($_POST['lsAnime'])) ? $_POST['lsAnime'] : "";
        $txtComentario = (isset($_POST['txtComentario'])) ? $_POST['txtComentario'] : ""; 

        
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: #000;
            color: #fff;
        }
    </style>
</head>

<body>

    <?php if($_POST){?>
        <strong>Hola </strong>: <?php echo $txtNombre;?>
        <br>
        <strong>Tu lenguaje es: </strong> <?php echo $rdg_lenguaje;?> 
        <br>
        <strong>Estas aprendiendo </strong>  <br>
        -<?php echo ($chk_php=="checked")?"PHP":"";?> <br>
        -<?php echo ($chk_html=="checked")?"HTML":"";?> <br>
        -<?php echo ($chk_css=="checked")?"CSS":"";?> <br>
        <br>
        <strong>Tu anime favorite es: </strong> <?php echo $lsAnime;?>
        <br>
        <strong>Tu mensaje es: </strong> <?php echo $txtComentario;?>
    <?php }?>

    <form action="#" method="post">
        Nombre: <br>
        <input value="<?php echo $txtNombre;?>" type="text" name="txtNombre" id="">
        <br>
        <br>
        ¿Te gusta?<br>  
        <br> php: <input type="radio" <?php echo ($rdg_lenguaje=="php")?"checked":"";?> name="lenguaje" value="php" id="">  <br>
        <br> html <input type="radio" <?php echo ($rdg_lenguaje=="html")?"checked":"";?> name="lenguaje" value="html" id="">  <br>
        <br> css <input type="radio" <?php echo ($rdg_lenguaje=="css")?"checked":"";?> name="lenguaje" value="css" id="">  <br>

        <br>
        Estas Aprendiendo?....<br>
        <br> php:<input type="checkbox" <?php echo  $chk_php?> name="chkphp" value="si" id="">
        <br> html: <input type="checkbox" <?php echo  $chk_html?> name="chkhtml" value="si" id="">
        <br> css:<input type="checkbox"  <?php echo  $chk_css?> name="chkcss" value="si" id="">
        <br>

        ¿Que anime te gusta?<br>
        <select name="lsAnime" id="">
            <option value="">(Ninguna Serie)</option>
            <option value="naruto" <?php echo ($lsAnime=="naruto")?"selected":""; ?>>Naruto</option>
            <option value="dragonball" <?php echo ($lsAnime=="dragonball")?"selected":""; ?> >Dragon Ball</option>
            <option value="onepiece" <?php echo ($lsAnime=="onepiece")?"selected":""; ?> >One Piece</option>
            <option value="bleach" <?php echo ($lsAnime=="bleach")?"selected":""; ?> >Bleach</option>
            <br>
        </select>
        <br>
        Tienes alguna duda?<br>

        <textarea name="txtComentario" id="" cols="30" rows="10">
            <?php echo $txtComentario;?>
        </textarea>
        <br>
        <input type="submit" value="Enviar Info">
    </form>
</body>

</html>