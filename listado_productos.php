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
    <title>Listado Productos</title>
</head>

<body>
    <main class="container">
        <div class="text-center py-5">
            <h1>Listado de productos</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table border table-hover">
                   <thead> 
                        <tr>
                            <th>Nombre</th> 
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Stock</th>
                            <th>Precio</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Srmat Tv 55" 4K UHD</td>
                            <td>Hitachi</td>
                            <td>554KS20</td>
                            <td>Hay stock</td>
                            <td>$58000</td>
                            <td>Comprar</td>
                        </tr>
                        <tr>
                            <td>Samsung Galaxy A30 Blanco</td>
                            <td>Samsung</td>
                            <td>Galaxy A30</td>
                            <td>Sin stock</td>
                            <td>$22000</td>
                            <td>Comprar</td>
                        </tr>
                        <tr>
                            <td>Aire Acondicionado Split F/C Surrey 2900F</td>
                            <td>Surrey</td>
                            <td>553AIQ1201E</td>
                            <td>Poco stock</td>
                            <td>$45000</td>
                            <td>Comprar</td>
                        </tr>

                    </tbody>
                    

                </table>

            </div>
        </div>

    </main>

</body>

</html>