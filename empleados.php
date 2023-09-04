<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aEmpleados = array();
$aEmpleados[] = array("dni" => 33300123, "nombre" => "David García", "Bruto" => 85000.30);
$aEmpleados[] = array("dni" => 40874456, "nombre" => "Ana del Valle", "Bruto" => 90000);
$aEmpleados[] = array("dni" => 67567565, "nombre" => "Andrés Perez", "Bruto" => 100000);
$aEmpleados[] = array("dni" => 75744545, "nombre" => "Victoria Luz", "Bruto" => 70000);


function calcularNeto($bruto)
{
    return $bruto * 0.83;
}

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Empleados</title>
</head>

<body>
    <main class="container">
        <div class="text-center py-5">
            <h1>Listado de empleados</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table border tabler-hover">
                    <thead>
                        <tr>
                            <th>DNI</th>
                            <th>NOMBRE</th>
                            <th>SUELDO</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        foreach ($aEmpleados as $empleado) {

                        ?>
                            <tr>
                                <td><?php echo $empleado["dni"]; ?></td>
                                <td><?php echo mb_strtoupper($empleado["nombre"]); ?></td>
                                <td><?php echo number_format(calcularNeto($empleado["Bruto"]), 2, ",", "."); ?></td>                                    
                            </tr>

                        <?php
                        }
                        ?>

                    </tbody>


                </table>

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Cantidad de empleados activos : <?php echo count($aEmpleados); ?></p>
            </div>
        </div>

    </main>

</body>

</html>