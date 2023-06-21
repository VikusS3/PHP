<?php
include("cabecera.php");
include("conexion.php");

if ($_POST) {
    # code...
    print_r($_POST);
    $nombre = $_POST['txtNombre'];
    $descripcion = $_POST['txtDescripcion'];
    $imagen = $_FILES['txtArchivo']['name'];

    $objConexion = new conexion();
    $sql = "INSERT INTO `proyectos` (`id`, `Nombre`, `Imagen`, `Descripcion`) VALUES (NULL,'$nombre', '$imagen', '$descripcion');";
    $objConexion->ejecutar($sql);
}

if($_GET){

    $id = $_GET['borrar'];
    $objConexion = new conexion();
    $sql = "DELETE FROM `proyectos` WHERE `proyectos`.`id` =".$id;
    $objConexion->ejecutar($sql);
}

$objConexion = new conexion();
$proyectos = $objConexion->consultar("SELECT * FROM proyectos");

// print_r($proyectos);

?>
<br>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Datos del Proyecto
                </div>
                <div class="card-body">
                    <form action="portafolio.php" method="post" enctype="multipart/form-data">
                        Nombre del Proyecto: <input type="text" class="form-control" name="txtNombre" id="">
                        <br>
                        Imagen del Proyecot: <input type="file" class="form-control" name="txtArchivo" id="">
                        <br>
                        <textarea class="form-control" name="txtDescripcion" id="" cols="20" rows="10"></textarea>
                        <br>
                        <button class="btn btn-success" type="submit">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="table-responsive">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre del Proyecto</th>
                            <th>Imagen</th>
                            <th>Descripcion</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($proyectos as $proyecto) {
                        ?>
                            <tr>
                                <td> <?php echo $proyecto['id'];?> </td>
                                <td><?php echo $proyecto['nombre'];?></td>
                                <td><?php echo $proyecto['imagen'];?></td>
                                <td><?php echo $proyecto['Descripcion'];?></td>
                                <td><a class="btn btn-danger" href="?borrar=<?php echo $proyecto['id']; ?>">Eliminar</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>









<?php
include("pie.php");
?>