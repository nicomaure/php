<?php
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);

$archivo = fopen('datos.txt', 'a+');
if ($archivo) {
    
    foreach ($variable as $item) {
        fwrite($archivo, $item);
    }
    fclose($archivo);
} else {
    echo "Error al abrir el archivo.";
}

?>
