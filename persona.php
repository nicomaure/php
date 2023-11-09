<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class Persona{
    protected $dni;
    protected $nombre;
    protected $edad;
    protected $nacionalidad;

    public function __construct($dni="", $nombre="", $edad="", $nacionalidad=""){
        $this->dni = $dni;}

    public function __destruct(){echo "Destruyendo el objeto " . $this->nombre . "<br>";}

//Set y Get para  clases pretected 
    public function setDni($dni){ $this->dni = $dni;}
    public function getDni (){ return $this->dni; }

    public function setNombre($nombre){ $this->nombre = $nombre;}
    public function getNombre(){ return $this->nombre;}

    public function setEdad($edad){ $this->edad = $edad;}
    public function getEdad (){ return $this->edad;}

    public function setNacionalidad($nacionalidad){ $this->nacionalidad = $nacionalidad;}
    public function getNacionalidad(){return $this->nacionalidad;}
        
    
          
    public function imprimir(){}
}

class Alumno extends Persona{

    private $legajo;
    private $notaPorfolio;
    private $notaPhp;
    private $notaProyecto;

    public function __construct()
    {
        $this->notaPorfolio= 0.0;
        $this->notaPhp= 0.0;
        $this->notaProyecto= 0.0;
    }

    public  function __destruct(){ echo "Destruyendo el objeto " . $this->nombre . "<br>";}

    public function __get($propiedad){ return $this->$propiedad;}
    public function __set($propiedad, $valor){ $this->$propiedad = $valor;}

    
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
    private $especialidad;
    const ESPECIALIDAD_WP = "Wordpress";
    const ESPECIALIDAD_ECO = "Economia Aplicada";
    const ESPECIALIDAD_BBDD = "Base de Datos";

    public  function __destruct()
    {
       echo "Destruyendo el objeto " . $this->nombre . "<br>";
    }


    public function imprimir(){}
    public function imprimirEspecialidadesHabilitadas(){
        echo "Un docente puede tener las siguientes especialidades:<br>";
        echo "Especialiad 1: " . self::ESPECIALIDAD_WP . "<br>";
        echo "Especialiad 2: " . self::ESPECIALIDAD_ECO . "<br>";
        echo "Especialiad 3: " . self::ESPECIALIDAD_BBDD . "<br>";
    }

    public function __get($propiedad){ return $this->$propiedad;}
    public function __set($propiedad, $valor){ $this->$propiedad = $valor;}
}

// Programa

$alumno1 = new Alumno();
$alumno1->setDni("28774109");
$alumno1->nombre = "Nico <br>";
echo "El nombre es " . $alumno1->getNombre();
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

$docente1 = new Docente();
$docente1->nombre = "Juan Perez";
$docente1->imprimirEspecialidadesHabilitadas();



?>-