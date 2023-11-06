<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class Persona{
    public $dni;
    public $nombre;
    public $edad;
    public $nacionalidad;

    public function imprimir(){

    }
}

class Alumno extends Persona{

    public $legajo;
    public $notaPorfolio;
    public $notaPhp;
    public $notaProyecto;

    public function __construct()
    {
        $this->notaPorfolio= 0.0;
        $this->notaPhp= 0.0;
        $this->notaProyecto= 0.0;
    }
    

    public function imprimir(){

    }

    public function calcularPromedio(){

    }
}

class Docente extends Persona{
    public $especialidad;

    public function imprimir()
    {
        
    }

    public function imprimirEspecialidadesHabilitadas(){
        
    }
}

// Programa

$alumno1 = new Alumno();
$alumno1 ->promedio= 8;
$alumno1 ->nombre= "Nico";
?>