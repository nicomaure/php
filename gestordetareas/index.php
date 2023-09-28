<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

hola me lla mnicolas
soy de 
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
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
            <div class="col-12 pb-5">
                <form action="" method="post">
                    <div class="row">
                     <div class="col-4">
                            <label for="">Prioridad</label>
                            <input type="text" name="txtPrioridad" id="txtPrioridad" class="form-control shadow">
                        </div>
                        <div class="col-4">
                            <label for="">Usuario</label>
                            <input type="text" name="txtUsuario" id="txtUsuario" class="form-control shadow">
                        </div>
                        <div class="col-4 pb-3">
                            <label for="">Estado</label>
                            <input type="text" name="txtEstadp" id="txtEstado" class="form-control shadow">
                        </div>
                    </div>
                    <div class="pb-3">
                        <label for="">Título</label>
                        <input type="text" name="txtTitulo" id="txtTitulo" class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <label for="">Descripción</label>
                        <textarea name="txtMensaje" id="txtMensaje" cols="" rows="" class="form-control shadow"></textarea>
                    </div>
                    <div class="text-center">
                    <button type="submit" name="btnEnviar" class="btn btn-primary text-white">ENVIAR</button>
                    <button type="submit" name="btnCancelar" class="btn btn-secondary text-white">CANCELAR</button>
                    </div>
                    
                </form>
            </div>
            <div class="col-12">
                <table class="table border table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Fercha de Inserción</th>
                            <th>Título</th>
                            <th>Prioridad</th>
                            <th>Usuario</th>
                            <th>Estado</th>
                            <th></th>
                        </tr>
                        
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        

    </main>
    
</body>
</html>