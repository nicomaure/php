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
    <title>Gestor de tareas</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Gestor de tareas</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="" method="post">
                    <div class="row">
                     <div class="col-4">
                            <label for="">Prioridad</label>
                            <input type="text" name="txtPrioridad" id="txtPrioridad" class="form-control">
                        </div>
                        <div class="col-4">
                            <label for="">Usuario</label>
                            <input type="text" name="txtUsuario" id="txtUsuario" class="form-control">
                        </div>
                        <div class="col-4">
                            <label for="">Estado</label>
                            <input type="text" name="txtEstadp" id="txtEstado" class="form-control">
                        </div>
                    </div>
                    <div>
                        <label for="">Título</label>
                        <input type="text" name="txtTitulo" id="txtTitulo" class="form-control">
                    </div>
                    <div>
                        <label for="">Descripción</label>
                        <input type="submit" value="" class="form-control">
                    </div>

                    
                </form>
            </div>
        </div>
        

    </main>
    
</body>
</html>