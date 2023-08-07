<?php
date_default_timezone_set('America/Argentina/Buenos_Aires');//para setear el horario de argentina
$nombre = "Nicolás Martín Maure";
$edad = 42;
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>Ficha Personal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div>
                <h1 class="col-12 text-center py-5">Ficha Personal</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table border table-hover">

                    <tr>
                        <th>Fecha:</th>
                        <td><?php echo date ("d/m/Y"); ?></td>                        
                    </tr>
                    <tr>
                        <th>Nombre y Apellido:</th>
                        <td><?php echo $nombre; ?></td>
                    </tr>
                    <tr>
                        <th>Edad:</th>
                        <td><?php echo $edad; ?></td>
                    </tr>
                    <tr>
                        <th>Peliculas Favoritas:</th>
                        <td>
                            Volver al futuron<br>
                            Scarface<br>
                            Casino
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
</body>

</html>