<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


session_start();

if (isset($_SESSION["listadoClientes"])){
    $aClientes = $_SESSION["listadoClientes"];
} else{
    $aClientes = array();
}



if($_POST){
$nombre = $_POST["txtNombre"];
$dni = $_POST["txtDni"];
$telefono = $_POST["txtTelefono"];
$edad = $_POST["txtEdad"];

//creo un array que tendra el listado de clientes

$aClientes[] = array("nombre" => $nombre, "dni" => $dni, "telefono" => $telefono, "edad" => $edad);

}

?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Listado de clientes</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Listado de clientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-3 offset-1 me-5">
                <form action="" method="post">
                  
                        <label for="">Nombre:</label>
                        <input type="text" name="txtNombre"id="txtNombre" placeholder="Ingrese el nombre y apellido" class= "form-control my-2">
                  
                
                        <label for="">DNI:</label>
                        <input type="text" name="txtDni" id="txtDni" class="form-control my-2">
                 
           
                        <label for="">Telefono:</label>
                        <input type="tel" name="txtTelefono" id="txtTelefono" class="form-control my-2">
                  
                        <label for="">Edad:</label>
                        <input type="text" name="txtEdad" id="txtEdad" class="form-control my-2">
                   
                        <button type="submit" name="btnEnviar" class="btn bg-primary text-white">Enviar</button>
                        <button type="reset" name="btnEliminar"class="btn bg-danger text-white">Eliminar</button>
                        
                 
                      
                </form>

            </div>
            <div class="col-6 ms-5">
                <table class="table shadow border table-hover">
                    <thead>
                        <tr>
                            <th>Nombre:</th>
                            <th>DNI:</th>
                            <th>Teléfono:</th>
                            <th>Edad:</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($aClientes as $cliente):?>
                        <tr>
                            <td><?php echo $cliente["nombre"] ?></td>
                            <td><?php echo $cliente["dni"] ?></td>
                            <td><?php echo $cliente["telefono"] ?></td>
                            <td><?php echo $cliente["edad"] ?></td>

                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    
</body>
</html>