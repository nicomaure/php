<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


function promediar($aNumeros)
{
    $suma = 0;
    foreach ($aNumeros as $numero) {
        $suma += $numero;
    }
    return $suma / count($aNumeros);
}



$aAlumnos = array();
$aAlumnos[] = array("nombre" => "Ana Valle", "aNotas" => array(7, 8));
$aAlumnos[] = array("nombre" => "Bernabe Paz", "aNotas" => array(5, 7));
$aAlumnos[] = array("nombre" => "Sebastian Aguirre", "aNotas" => array(6, 9));
$aAlumnos[] = array("nombre" => "Monica Ledesma", "aNotas" => array(8, 9));



?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Actas</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Actas</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table border table-hover">
                    <thead>
                        <tr>
                            <th>Alumno</th>
                            <th>Nota 1</th>
                            <th>Nota 2</th>
                            <th>Promedio</th>
                        </tr>


                    </thead>
                    <tbody>

                        <?php

                       
                        $sumPromedios = 0;
                        foreach ($aAlumnos as $alumno) {
                          
                            $promedio = promediar($alumno["aNotas"]);
                            $sumPromedios += $promedio;
                        ?>

                            <tr>

                                <td><?php echo $alumno["nombre"] ?></td>
                                <td><?php echo $alumno["aNotas"][0] ?></td>
                                <td><?php echo $alumno["aNotas"][1] ?></td>
                                <td><?php echo number_format(promediar($alumno["aNotas"]), 2, ",", "."); ?></td>

                            </tr>
                        <?php
                        } ?>

                    </tbody>

                </table>
                <div class="row">
                    <div class="col-12">
                        <h5>Promedio de la cursada: <?php echo number_format($sumPromedios / count($aAlumnos), 2, ",", "."); ?></h5>
                    </div>
                </div>
            </div>
        </div>


    </main>


</body>

</html>