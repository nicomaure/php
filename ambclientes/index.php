<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
if(isset($_SESSION["listadoClientes"])){
    $aClientes = $_SESSION["listadoClientes"];
}else{
    $aClientes = array();
}







if($_POST){
    if(isset($_POST["btnGuardar"])){        
        $dni = $_POST ["txtDni"];
        $nombre = $_POST["txtNombre"];
        $telefono = $_POST["txtTelefono"];
        $correo = $_POST["txtCorreo"];

        $aClientes[] = array("dni" => $dni, "nombre" => $nombre, "telefono" => $telefono, "correo" => $correo);
    }
}

if(isset($_GET["pos"])){
    $pos = $_GET["pos"];
    unset($aClientes[$pos]);
    $_SESSION["listadoClientes"] = $aClientes;
    header("location: index.php");
}



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de clientes</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Registro de clientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-3 offset-1 me-5">
                <form action="" method="post" enctype="multipart/form-data">
                            
                        <label for="">DNI: *</label>
                        <input type="text" name="txtDni" id="txtDni" class="form-control my-2">
                                               
                        <label for="">Nombre: *</label>
                        <input type="text" name="txtNombre" id="txtNombre" class="form-control my-2" placeholder="Ingrese nombre y apellido">
                    
                        <label for="">Teléfono: *</label>
                        <input type="tel" name="txtTelefono" id="txtTelefono" class="form-control my-2">
                   
                        <label for="">Correo: *</label>
                        <input type="email" name="txtEmail" id="txtEmail" class="form-control my-2">
                    <div class="pb-2">
                        <label for="">Archivo adjunto</label>
                        <input type="file" name="archivo" id="archivo" accept=".jpg,.jpeg, .png">
                        <small class="d-block">Archivos admitidos: .jpg, .jpeg, .png</small>  
                    </div>
                        <button type="submit" name="btnGuardar" class="btn bg-primary text-white">Guardar</button>
                        <button type="submit" name="btnNUEVO" class="btn bg-danger text-white">NUEVO</button>
                          
                </form>

               
            </div>
            <div class="col-6 ms-5">
                <table class="table border shadow table-hover">
                    <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>DNI</th>
                            <th>Correo</th>
                            <th>Acciones</th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php foreach($aClientes as $pos=> $cliente) : ?>
                        <tr>
                            <td><?php echo $aClientes["dni"] ?></td>
                            <td><?php echo $aClientes["nombre"] ?></td>
                            <td><?php echo $aClientes["telefono"] ?></td>
                            <td><?php echo $aClientes["correo"] ?></td>
                            <td><a href="clientes_session.php?pos=<?php echo $pos; ?>"><i class="bi bi-trash"></i></td>
                            
                        </tr>
                        <?php endforeach; ?>

                    </tbody>


                </table>
            </div>
        </div>

    </main>
    
</body>
</html>




