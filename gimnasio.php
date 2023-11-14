<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


//Definiciones de Clases
class Persona{
    protected $dni;
    protected $nombre;
    protected $correo;
    protected $celular;


//metodos setter y getter
    public function __get($propiedad){
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor)
    {
        $this->$propiedad = $valor;
    }

}


class Alumno extends Persona{

    //metodos setter y getter
    public function __get($propiedad){
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor)
    {
        $this->$propiedad = $valor;
    }
    private $fechaNac;
    private $peso;
    private $altura;
    private $aptoFisico;
    private $presentismo;

    public function __construct(){
        $this->peso = 0.0;
        $this->altura = 0.0;
        $this->aptoFisico = false;
        $this->presentismo = 0.0;
    }

    public function setFichamedica(){}

}

class Entrenador extends Persona{

    //metodos setter y getter
    public function __get($propiedad){
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor)
    {
        $this->$propiedad = $valor;
    }

    private $aClases;
    public function __construct(){
        $this->aClases = array();
        }

    public function asignarClase(){}
}

class Clase{

    //metodos setter y getter
    public function __get($propiedad){
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor)
    {
        $this->$propiedad = $valor;
    }

    
    private $nombre;
    private $entrenador;
    private $alumnos;
    
    public function __construct(){
        $this->alumnos = array();
        }

    public function asignarEntrenador(){}
    public function inscribirAlumno(){}
    public function imprimirListado(){}

}

//Desarrollo del Programa.

$entrenador1 = new Entrenador("34987789", "Miguel Ocampo", "miguel@mail.com", "11678634");
$entrenador2 = new Entrenador("28987589", "Andrea Zarate", "andrea@mail.com", "11768654");
$alumno1 = new Alumno("40787657", "Dante Montera", "dante@mail.com", "1145632457", "1997-08-28");
$alumno1->setFichaMedica(90, 178, true);
$alumno1->presentismo = 78;

$alumno2 = new Alumno("46766547", "Dario Turchi", "dante@mail.com", "1145632457", "1986-11-21");
$alumno2->setFichaMedica(73, 168, false);
$alumno2->presentismo = 68;

$alumno3 = new Alumno("39765454", "Facundo Fagnano", "facundo@mail.com", "11456632457","1993-02-06");
$alumno3->setFichaMedica(90, 187, true);
$alumno3->presentismo = 88;

$alumno4 = new Alumno("41687536", "Gaston Aguilar", "gaston@mail.com", "1145632457", "1999-11-02");
$alumnod->setFichaMedica(70, 169, false);
$alumno4->presentismo = 98;


$clase1 = new Clase();
$clase1->nombre = "Funcional";
$clase1->asignarEntrenador($entrenador1);
$clase1->inscribirAlumno($alumno1);
$clase1->inscribirAlumno($alumno3);
$clase1->inscribirAlumno($alumno4);
$clase1->imprimirListado();

$clase2 = new Clase();
$clase2->nombre = "Zumba";
$clase2->asignarEntrenador($entrenador2);
$clase2->inscribirAlumno($alumno1);
$clase2->inscribirAlumno($alumno2);
$clase2->inscribirAlumno($alumno3);
$clase2->imprimirListado();
?>