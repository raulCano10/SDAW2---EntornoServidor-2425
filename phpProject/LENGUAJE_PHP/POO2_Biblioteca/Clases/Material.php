<?php
session_start();

abstract class Material{
    public $codigo;
    public $titulo;
    protected $autor;

    public function __construct($codigo, $titulo, $autor){
        $this->codigo = $codigo;
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

    abstract function mostrarDetalles();
    // public function mostrarDetalles(){
    //     echo "Material Código: {$this->codigo} (Autor:{$this->autor}, Título: {$this->titulo})"; 
    // }



}

class Libro extends Material{
    public $genero;

    // public function __construct($codigo, $titulo, $autor,$genero){
    //     $this->codigo = $codigo;
    //     $this->titulo = $titulo;
    //     $this->autor = $autor;
    //     $this->genero = $genero;
    // }

    public function __construct($codigo, $titulo, $autor,$genero){
        parent::__construct($codigo,$titulo,$autor);
        $this->genero = $genero;
    }

    public function getAutor(){
        return $this->autor;
    }

     public function mostrarDetalles(){
         return "Libro Código: {$this->codigo} (Autor:{$this->autor}, Título: {$this->titulo},Género: {$this->genero})"; 
     }

     //Esta funcion nos ayuda a personalizar el proceso de serializacion
     public function __sleep(){
        echo "ME ESTAN LLAMANDO __sleep";
        
        
     }

    //Esta funcion nos ayuda a personalizar el proceso de deserialización de un objeto
     public function __wakeup(){

     }
}

class AudioLibro extends Material{

    public function mostrarDetalles(){
        return "AudioLibro Código: {$this->codigo} (Autor:{$this->autor}, Título: {$this->titulo})"; 
    }
}

class Revista extends Material{
    public $edicion;

    public function __construct($codigo, $titulo, $autor,$edicion){
        parent::__construct($codigo, $titulo, $autor);
        $this->edicion = $edicion;
    }
    public function mostrarDetalles(){
        return "Revista Código: {$this->codigo} (Autor:{$this->autor}, Título: {$this->titulo}, Edición: {$this->edicion})"; 
    }
}
echo "<pre>";
//Los objetos de las subclases(clases hijas) tambien son objetos de las clases padre
$libro1 = new Libro("458-584-8542145", "hola", "Andres C.S.", "Narrativo");

if($libro1 instanceof Libro){
    echo "libro1: SI SOY UN LIBRO. <br>";
}else{
    echo "libro1: NO SOY UN LIBRO. <br>";
}

if($libro1 instanceof Material){
    echo "libro1: SI SOY UN MATERIAL. <br>";
}else{
    echo "libro1: NO SOY UN MATERIAL. <br>";
}

//Las clases hijas heredan todos  los atributos y metodos del padre
// !!!! Menos los privados!!!! porque los privados son solo accesibles desde la propia clase.

echo $libro1->codigo . "<br>";
echo $libro1->titulo . "<br>";
//echo $libro1->autor . "<br>";

echo $libro1->mostrarDetalles(). "<br>";

//¿Como evitamos que las clases hijas modifiquen el comportamiento de los metodos de las clases padre?

//Con batract estamos definiendo lo contrario que con final
//Obligamos a que los metodos abstract sean declarados por los hijos si o si.

$audioLibro1 = new AudioLibro("485-444-8585858", "Podcast01", "Selma");
echo $audioLibro1->mostrarDetalles() . "<br>";

$revista1 = new Revista("001", "National Geographic", "Frederick y Marsall","edicion 2024");
echo $revista1->mostrarDetalles(). "<br>";
echo "</pre>";


//Mecanismos de mantenimientos estados

//$_SESSION array global
//Para poder almacenarlos hay que serializar la informacion.
//Para volver a utilizar ese objeto es necesario deserializarlo.

//Lo primero es iniciar la sesion para el manejo de estados de las variables
//session_start();
echo "<pre>";
echo "<hr>";
//Verificar que una sesion esta activa o no
if(session_status() === PHP_SESSION_ACTIVE){
    echo "<br>LA SESION ESTÁ ACTIVA<br>";
}else{
    echo "<br>LA SESION NO  ESTÁ ACTIVA<br>";
}

$_SESSION['libro1'] = serialize($libro1);
$_SESSION['AudioLibro1'] = serialize($audioLibro1);
$_SESSION['revista1'] = serialize($revista1);


echo $_SESSION['libro1']. "<br>";
echo $_SESSION['AudioLibro1']. "<br>";
echo $_SESSION['revista1']. "<br>";


$libroRecuperado = unserialize($_SESSION['libro1']);
echo "El objeto recuperado es de la clase: " . get_class($libroRecuperado). "<br>";
echo $libroRecuperado->mostrarDetalles();

echo "<hr>";
echo print_r($_SESSION);

echo "</pre>";



?>