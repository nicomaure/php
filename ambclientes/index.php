<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Preguntar si existe el archivo

if (file_exists("archivo.txt")) {
    //Vamos a leerlo y almacenamos el conetenido en jsonClientes
    $jsonClientes = file_get_contents("archivo.txt");
    //Convertir jsonClientes en un array llamado aClientes
    $aClientes = json_decode($jsonClientes, true);

} else {
    //Si no existe el archivo
   //Creamos un aCliente inicialiado como un array vacio
        $aClientes = array();
}
   

if($_POST){
           
        $documento = trim($_POST ["txtDocumento"]);
        $nombre = trim($_POST["txtNombre"]);
        $telefono = trim($_POST["txtTelefono"]);
        $correo = trim($_POST["txtCorreo"]);

        $aClientes[] = array("documento" => $documento,
                             "nombre" => $nombre, 
                             "telefono" => $telefono, 
                             "correo" => $correo);

    //convertir el array de $aClientes a jsonClientes
    $jsonClientes = json_encode($aClientes);

    // almacenar el archivo jsonCllientes a un "archivo.txt"
   
    file_put_contents("archivo.txt", $jsonClientes);
    }
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <title>AMB Clientes</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Registro de clientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-4  me-5 card shadow-lg bg-success text-black pb-1">
                <form action="" method="post" enctype="multipart/form-data">
                    <div>        
                        <label for="">DNI: *</label>
                        <input type="text" name="txtDocumento" id="txtDocumento" class="form-control my-2 shadow">
                    </div> 
                    <div>                    
                        <label for="">Nombre: *</label>
                        <input type="text" name="txtNombre" id="txtNombre" class="form-control my-2 shadow" placeholder="Ingrese nombre y apellido">
                    </div>     
                    <div>
                        <label for="">Teléfono: *</label>
                        <input type="tel" name="txtTelefono" id="txtTelefono" class="form-control my-2 shadow" placeholder="+54(261)">
                    </div>
                    <div>
                        <label for="">Correo: *</label>
                        <input type="email" name="txtCorreo" id="txtCorreo" class="form-control my-2 shadow">
                    </div>
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
                <div class="card shadow-lg bg-success text-white text-center">
                    <table class="table border table-hover">
                        
                            <tr>
                                <th>Imagen</th>
                                <th>Documento</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Acciones</th>
                            </tr>
                                                                
                            <?php foreach($aClientes as $cliente): ?>
                            <tr>
                                <td></td>
                                <td><?php echo $cliente["documento"]; ?></td>
                                <td><?php echo $cliente["nombre"]; ?></td>
                                <td><?php echo $cliente["correo"]; ?></td>
                                <td>
                                    <i class="fa-solid fa-pencil"></i>
                                    <i class="fa-solid fa-trash"></i>
                                </td>
                                                          
                            </tr>
                            <?php endforeach; ?>

                    </table>
                </div>
            </div>
        </div>

    </main>
    
</body>
</html>




