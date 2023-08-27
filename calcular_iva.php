<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if ($_POST){

}


?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Calcular Iva</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Calculadora de IVA</h1>
            </div>       
        </div>
        <div class="row">
            <div class="col-6">
                <form action="" method="post">
                    <div class="pb-3">
                        <label for="">IVA</label>
                        <select name="lstIva" id="lstIva" class="form-control">
                        <option value="10.5">10.5</option>
                        <option value="19">19</option>
                        <option value="21">21</option>
                        <option value="27">27</option>
                        </select>
                    </div>
                    <div class="pb-3">
                        <label for="">Precio sin IVA:</label>
                        <input type="number" name="txtSiniva" id="txtSiniva" class="form-control">
                    </div>
                    <div class="pb-3">
                        <label for="">Precio con IVA:</label>
                        <input type="number" name="txtConiva" id="txtConiva" class="form-control">
                    </div>
                    <div>
                        <button type="submit" name="btnCalcular" class="btn btn-primary">Calcular</button>
                    </div>
                </form>  
            </div>
            <div class="col-5 pt-4">
                <table class="table border table-hover">
                    
                        <tr>
                            <th>IVA:</th>
                            <td>Dato1</td>                          
                        </tr>
                        <tr>
                            <th>Precio sin IVA:</th>
                            <td>Dato1</td>                          
                        </tr>
                        <tr>
                            <th>Precio con IVA:</th>
                            <td>Dato1</td>                          
                        </tr>
                        <tr>
                            <th>IVA Cantidad:</th>
                            <td>Dato1</td>                          
                        </tr>                  
                   
                </table>
            </div>
        </div>

    </main>
    
</body>
</html>