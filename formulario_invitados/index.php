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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Formulario de Invitados</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-3">
                <h1>Lista de invitados</h1>
            </div>
            <div class="col-12">
                <p>Complete el siguiente formulario</p>
            </div>
            <div class="col-6">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-12 pb-3">
                            <p>Ingrese el DNI:</p>
                            <input type="text" name="txtNombre" class="form-control">
                            <input type="submit" value="Verificar invitado" name="btnProcesar" class="btn btn-primary">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p>Ingresa el código segreto para el pase VIP:</p>
                            <input type="text" name="txtPregunta" class="form-control">
                            <input type="submit" value="Verificar Código" name="btnVip" class="btn btn-primary">

                        </div>
                    </div>
                </form>

            </div>

        </div>

    </main>
    
</body>
</html>