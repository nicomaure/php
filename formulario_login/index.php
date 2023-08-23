<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



if ($_POST) { /*Pregunta si el usuario envio datos en el formulario, es el evento postback*/
    $usuario = $_POST["txtUsuario"];
    $clave = $_POST["txtClave"];
    if ($usuario == "admin" && "$clave" == "123456") {
        header("Location: acceso-confirmado.php");
    } else {
        $msg = "Usuario o clave incorrecto";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>formulario</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Formulario de Ingreso</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <form action="" method="post">
                    <div class="pb-3">
                        <label for="">Usuario</label>
                        <input type="text" name="txtUsuario" id="txtUsuario" class="form-control">
                    </div>
                    <div class="pb-3">
                        <label for="">clave</label>
                        <input type="password" name="txtClave" id="txtClave" class="form-control">
                    </div>
                    <div>
                        <button type="submit" name="btnIngresar" class="btn btn-primary">INGRESAR</button>
                    </div>
                    <div class="alert alert-dark" role="alert">
                              <?php echo $msg ?>
                    </div>
                </form>
            </div>
        </div>

    </main>

</body>

</html>