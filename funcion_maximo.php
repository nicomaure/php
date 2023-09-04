<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


function maximo($aVector)
{
    $valor = 0;
    foreach ($aVector as $vector) {
        if ($valor < $vector) {
            $valor = $vector;
        }
    }
    return $valor;
}



$aNotas = array(8, 4, 5, 3, 9, 1);
echo "La nota maxima es: " . maximo($aNotas) . "<br>"; 
$aSueldos = array(8000, 4000, 5000, 3000, 9000, 1000);
echo "el sueldo maximo es: " . maximo($aSueldos) . "<br>";
