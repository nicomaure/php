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

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>formulario</title>
</head>
<body>
    <main>
        
    </main>
    
</body>
</html>