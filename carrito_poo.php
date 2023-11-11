<?php

use Mpdf\Tag\Table;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class Cliente{
    private $dni;
    private $nombre;
    private $correo;
    private $telefono;
    private $descuento;

    public function __construct(){
        $this->descuento = 0.0;
    }

    public function __get($propiedad){
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor)
    {
        $this->$propiedad = $valor;
    }

    public function imprimir(){
        echo "DNI: " . $this->dni . "<br>";
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Correo: " . $this->correo . "<br>";
        echo "Telefono: " . $this->telefono . "<br>";
        echo "Descuento: " . $this->descuento . "<br><br>";
    }

}

class Producto{
    private $cod;
    private $nombre;
    private $precio;
    private $descripcion;
    private $iva;

    

    public function __get($propiedad){
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor)
    {
        $this->$propiedad = $valor;
    }

    public function __construct(){
        $this->precio = 0.0;
        $this->iva = 0.0;
    }
    
    public function imprimir(){
        echo "cod: " . $this->cod . "<br>";
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Precio: " . $this->precio . "<br>";
        echo "Descripcion: " . $this->descripcion . "<br>";
        echo "iva: " . $this->iva . "<br><br>";
    }


}

class Carrito{
    private $cliente;
    private $aProductos;
    private $subTotal;
    private $total;

    public function __get($propiedad){
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor)
    {
        $this->$propiedad = $valor;
    }

    public function __construct(){
        $this->aProductos = array();
        $this->subTotal = 0.0;
        $this->total = 0.0;
    }

    public function cargarProducto($prodducto){
        $this-> aProductos[] = $prodducto;
    }

    public function imprimirTicket(){
        echo "<table class='table table-hover border style='width:400px'>";
        echo "<tr><th colspan='2' class='text-center'>ECO MARKET</th></tr>
              <tr>
                <th>Fecha:</th>
                <td>" . date("d/m/Y H:i:s") . "</td>
              </tr>  
              <tr>
                <th>DNI:</th>
                <td>" . $this->cliente->dni . "</td>
              </tr>  
              <tr>
                <th>Nombre:</th>
                <td>" . $this->cliente->nombre . "</td>
              </tr>  
              <th colspan='2'>Productos:</th>
              </tr>";
              foreach ($this->aProductos as $producto){
                echo "<tr>
                        <td>" . $producto->nombre . "</td>
                        <td>$ " . number_format($producto->precio,2,",",".") . "</td>
                      </tr> ";
                $this->subTotal += $producto->precio;
                $this->total += $producto->precio * (($producto->iva /100)+1);
              }

              echo "<tr>
                        <th>Subtotal s/IVA:</th>
                        <th>$ " . number_format($this->subTotal, 2,",",".") . "</td>
                    </tr>
                    <tr>
                        <th>TOTAL:</th>
                        <td>$ " . number_format($this->total, 2, ",",".") . "</td>
                    </tr>";
         
        
    }

}

//Programa
$cliente1 = new Cliente();
$cliente1->dni = "287761403";
$cliente1->nombre = "Bernabe";
$cliente1->correo = "bernabe@gmail.com";
$cliente1->telefono = "+5411886656";
$cliente1->descuento = 0.05;
//print_r($cliente1);
$cliente1->imprimir();

$producto1 = new Producto();
$producto1->cod ="ABC855";
$producto1->nombre = "Hp G60 15\"";
$producto1->descripcion ="Esto es una PC Hp";
$producto1->precio = 250000;
$producto1->iva = 21;
$producto1->imprimir();

$producto2 = new Producto();
$producto2->cod ="ABC555";
$producto2->nombre = "Heladera Whirpol Wt20";
$producto2->descripcion ="Esto es una heladera no froze";
$producto2->precio = 500000;
$producto2->iva = 10.5;
$producto2->imprimir();

$carrito= new Carrito();
$carrito->cliente = $cliente1;
echo "Nombre del cliente: " . $carrito->cliente->nombre . "<br>";
//print_r($carrito);
$carrito->cargarProducto($producto1);
$carrito->cargarProducto($producto2);
//print_r($carrito);
echo $carrito->aProductos[0]->nombre;
//$carrito->imprimirTicket();//Imprime ticket de la compra.


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Carrito</title>
</head>
<body>
    <main class="container">
        <div class="col-12">
            <?php $carrito->imprimirTicket();//Imprimir el ticket?>
        </div>

    </main>
</body>
</html>