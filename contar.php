<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php
//Definicion
function contar($aArray){

}

//Uso
$Notas = array(9,8,8.50,4,7,8.5);
echo "Cantidad de productos:" .contar($aProductos);
echo "Cantidad de pacientes:" .contar($aPacientes);
echo "Cantidad de notas:" .contar($aNotas);


?>