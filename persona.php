<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class Persona{
    public $dni;
    public $nombre;
    public $edad;
    public $nacionalidad;

    public function imprimir(){}
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
        echo "Nombre: " . $this->nombre . "<br>";
        echo "DNI: " . $this->dni . "<br>";
        echo "Edad: " . $this->edad . "<br>";
        echo "Nacionalidad: " . $this->nacionalidad . "<br>";
        echo "Nota PHP: " . $this->notaPhp . "<br>";
        echo "Nota Porfolio: " . $this->notaPorfolio . "<br>";
        echo "Nota Proyecto: " . $this->notaProyecto . "<br>";
        echo "Nota Promedio: " . number_format($this->calcularPromedio(),2,",",".") . "<br><br>";

    }
    public function calcularPromedio(){      
        return ($this->notaPhp + $this->notaPorfolio + $this->notaProyecto)/3;
    }
}

class Docente extends Persona{
    public $especialidad;
    const ESPECIALIDAD_WP = "Wordpress";
    const ESPECIALIDAD_ECO = "Economia Aplicada";
    const ESPECIALIDAD_BBDD = "Base de Datos";


    public function imprimir(){}
    public function imprimirEspecialidadesHabilitadas(){}
}

// Programa

$alumno1 = new Alumno();
$alumno1->dni = "28774109";
$alumno1->nombre = "Nico";
$alumno1->notaPhp = 9;
$alumno1->notaPorfolio = 8;
$alumno1->notaProyecto = 8;
$alumno1->imprimir();

$alumno2 = new Alumno();
$alumno2->dni = "28542580";
$alumno2->nombre = "Anahi";
$alumno2->notaPhp = 5;
$alumno2->notaPorfolio = 10;
$alumno2->notaProyecto = 9;
$alumno2->imprimir();



?>