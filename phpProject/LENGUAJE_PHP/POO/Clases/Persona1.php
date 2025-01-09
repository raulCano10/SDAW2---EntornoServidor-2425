<?php

class persona1{
    private $nombre;
    private $edad;


    public function __construct($nombre, $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    //Metodos magicos

    public function __get($propiedad){
        
        echo "ME ESTAN LLAMANDO SOY__GET $propiedad ";
    }

    public function __set($propiedad, $valor){
        echo "ME ESTAN LLAMANDO SOY__SET";
    }


}

$persona = new persona("Raul", "43");
echo $persona->nombre;
$persona->nombre = "RAUL";

?>