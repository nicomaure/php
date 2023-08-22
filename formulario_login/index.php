<?php
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);

$stock = 800;

echo $stock . " es mayor";



if($_POST){ /*Pregunta si el usuario envio datos en el formulario, es el evento postback*/
    $usuario = $_POST["txtUsuario"];
    $clave = $_POST["txtClave"];
    if($usuario == "admin" && "$clave" == "123456"){
    header("Location: https://google.com");
    } else {
            $msg = "Usuario o clave incorrecto";
        }
    }
?>
