<?php
include("cabecera.php");

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
                    <form action="portafolio.php" method="post">
                        Nombre del Proyecto: <input type="text" class="form-control" name="txtNombre" id="">
                        <br>
                        Imagen del Proyecot: <input type="file" class="form-control" name="txtArchivo" id="">
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
                            <th >Id</th>
                            <th >Nombre del Proyecto</th>
                            <th >Imagen</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td>3</td>
                            <td>Aplicacion</td>
                            <td>imagen.png</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>









<?php
include("pie.php");
?>