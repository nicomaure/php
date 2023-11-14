<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class Tarjeta {
    private $nombreTitular;
    private $numero;
    private $fechaDesde;
    private $fechaVto;
    private $tipo;
    private $cvv;

}

class Persona {
    protected $dni;
    protected $nombre;
    protected $correo;
    protected $celular;

}

class Cliente {
    private $aTarjetas = array();
    private $vActivo;
    private $fechaAlta;
    private $fechaBaja;

    public function __construct($fechaBaja)
    {
        $this->fechaAlta = date('Y-m-d');
        $this->vActivo = true;
        $this->fechaBaja = $fechaBaja;
    }

    public function agregarTarjeta(){}
    public function darDeBaja($fechaBaja){}
    public function imprimir(){}

}

?>