<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de clientes</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Registro de clientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <form action="" method="post">
                <div class="pb-3">               
                    <label for="">DNI: *</label>
                    <input type="text" name="txtDni" id="txtDni" class="form-control">
                </div>
                <div class="pb-3">               
                    <label for="">Nombre: *</label>
                    <input type="text" name="txtNombre" id="txtNombre" class="form-control">
                </div>
                <div class="pb-3">
                    <label for="">Teléfono: *</label>
                    <input type="tel" name="txtTelefono" id="txtTelefono" class="form-control">
                </div>
                <div class="pb-3">
                    <label for="">Correo: *</label>
                    <input type="email" name="txtEmail" id="txtEmail" class="form-control">
                </div>
                    
                </form>
               
            </div>
            <div class="col-6">
                <table class="table border table-hover">
                    <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>DNI</th>
                            <th>Correo</th>
                            <th>Acciones</th>
                        </tr>

                    </thead>
                    <tbody>
                        <tr>
                            <td>A</td>
                            <td>B</td>
                            <td>C</td>
                            <td>D</td>
                        </tr>

                    </tbody>


                </table>
            </div>
        </div>

    </main>
    
</body>
</html>




