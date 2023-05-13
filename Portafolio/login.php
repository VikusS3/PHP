<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <div class="container">

        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <br>

                <div class="card">
                    <div class="card-header">
                        Inciar Sesion
                    </div>
                    <div class="card-body">
                        <form action="login.php" method="post">
                            Usuario:
                            <input type="text" class="form-control" name="txtUsuario" id="">
                            <br>
                            Contraseña:
                            <input type="password" class="form-control" name="txtPassword" id="">
                            <br>
                            <button class="btn btn-success" type="submit">Ingresar</button>
                        </form>
                    </div>

                </div>

            </div>
            <div class="col-md-4">

            </div>
        </div>

    </div>



</body>

</html>