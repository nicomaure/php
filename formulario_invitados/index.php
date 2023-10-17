<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//lista de invitados admitidos
if(file_exists("invitados.txt")){
    $archivo =fopen("invitados.txt", "r");
    $aDocumentos = fgetcsv($archivo, 0, ",");
}else{
    $aDocumentos = array();
}

if ($_POST) {
    $documento = $_REQUEST["txtDocumento"];
    if (isset($_REQUEST['btnProcesar'])) {
        //si el dni ingresedado en la lista mostra el mensaje de bienvenida
        $documento = trim($_REQUEST['txtDocumento']);
        if (in_array($documento, $aDocumentos)) {
            //si no no se enencutra en la lista de invitados

            $aMensaje = array("texto" => "¡Bienvenid@ a la fiesta!", 
                              "estado" => "success");
        } else {
            $aMensaje = array("texto" => "No se encuentra en la lista de invitados.", 
                              "estado" => "danger");
        }
    } else if (isset($_REQUEST['btnVip'])) {
        $respuesta = trim($_REQUEST['txtPregunta']);
        if ($respuesta == "verde") {
            $aMensaje = array("texto" => "Su código de acceso es " . rand(1000,9999), "estado" => "success");

        } else {
            $aMensaje = array("texto" => "Ud. no tiene pase VIP", "estado" => "danger");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Formulario de Invitados</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-3">
                <h1>Lista de invitados</h1>
            </div>
            <?php if(isset($aMensaje)): ?>
        <div class="col-12">
            <div class="alert alert-<?php echo $aMensaje["estado"]; ?>" role="alert">
                <?php echo $aMensaje["texto"]; ?>
            </div>
        </div>
        <?php endif; ?>
            <div class="col-12">
                <p>Complete el siguiente formulario</p>
            </div>
            <div class="col-6">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-12 pb-3">
                            <p>Ingrese el DNI:</p>
                            <input type="text" name="txtDocumento" class="form-control">
                            <input type="submit" value="Verificar invitado" name="btnProcesar" class="btn btn-primary">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p>Ingresa el código segreto para el pase VIP:</p>
                            <input type="text" name="txtPregunta" class="form-control">
                            <input type="submit" value="Verificar Código" name="btnVip" class="btn btn-primary">

                        </div>
                    </div>
                </form>

            </div>

        </div>

    </main>
    
</body>
</html>