<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Forumario Datos Personales</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-cent py-5">
                <h1>Formulario de datos personales</h1>
            </div>
        </div>
        <div>
            <div class="row">
                <div class="col-12">
                    <form action="" method="post">
                        <div class="pb-3">
                            <label for="">Nombre:*</label>
                            <input type="text" name="txtNombre" id="txtNombre" class="form-control">
                        </div>
                        <div class="pb-3">
                            <label for="">DNI:*</label>
                            <input type="text" name="txtDni" id="txtDni" class="form-control">
                        </div>
                        <div class="pb-3">
                            <label for="">Télefono:*</label>
                            <input type="tel" name="txtTelefono" id="txtTelefono" class="form-control">
                        </div>
                        <div class="pb-3">
                            <label for="">Edad:*</label>
                            <input type="number" name="txtEdad" id="txtEdad" class="form-control">
                        </div>
                        <div class="text-end">
                            <button type="submit" name="btnEnviar" class="btn btn-primary">ENVIAR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </main>
    
</body>
</html>