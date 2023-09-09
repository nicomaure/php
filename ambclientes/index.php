<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


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
   

    // almacenar el archivo jsonCllientes a un "archivo.txt"
    }
    $jsonClientes = json_encode($aClientes);
    $archivo = 'archivo.txt';
    file_put_contents($archivo, $jsonClientes);




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
                                <td><?php echo $aClientes["documento"] ?></td>
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
        </div>

    </main>
    
</body>
</html>




