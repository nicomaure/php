<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


function promediar($aNumeros){
      $suma = 0;
    foreach ($aNumeros as $numero){
           $suma += $numero;
            }
    return $suma / count($aNumeros);
           
}



$aNotas = array(8,4,5,3,9,1);
echo "El promedio de las notas es: " .promediar($aNotas) . "<br>";//llamo a la funcion promediar con el . y envio el array $aNotas

$aSueldos = array(8000,4000,5000,3000,9000,1000);
echo "El promedio del sueldo es: " .promediar($aSueldos) . "<br>";
