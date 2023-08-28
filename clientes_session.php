<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_POST){
$nombre= $_POST["txtNombre"];
$dni=$_POST["txtDni"];
$telefono = $_POST["txtTelefono"];
$edad = $_POST["txtEdad"];

}

?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Listado de clientes</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Listado de clientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-3 offset-1">
                <form action="" method="post">
                    <div>
                        <label for="">Nombre:</label>
                        <input type="text" name="txtNombre"id=txtNombre class= form-control>
                    </div>
                    <div>
                        <label for="">DNI:</label>
                        <input type="text" name="txtDni" id="txtDni" class="form-control">
                    </div>
                    <div>
                        <label for="">Telefono:</label>
                        <input type="tel" name="txtTelefono" id="txtTelefono" class="form-control">
                    </div>
                    <div>
                        <label for="">Edad:</label>
                        <input type="text" name="txtEdad" id="txtEdad" class="form-control">
                    </div>                       
                    <div class="row pt-3">
                    <div class="col-6">
                        <button type="submit" name="btnEnviar" class="btn btn-primary">Enviar</button>
                     </div>
                        
                    <div class="col-6 text-end">
                         <button type="reset" name="btnEliminar"class="btn btn-danger">Eliminar</button>
                    </div>
                    </div>
                      
                </form>

            </div>
            <div class="col-6 pt-4 offset-1">
                <table class="table border table-hover">
                    <thead>
                        <tr>
                            <th>Nombre:</th>
                            <th>DNI:</th>
                            <th>Teléfono:</th>
                            <th>Edad:</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $nombre ?></td>
                            <td><?php echo $dni ?></td>
                            <td><?php echo $telefono ?></td>
                            <td><?php echo $edad ?></td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    
</body>
</html>