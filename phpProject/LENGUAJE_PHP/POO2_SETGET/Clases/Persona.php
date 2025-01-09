<?php

class Persona{
    private $nombre;
    private $edad;
    private $nuevasPropiedades = [];

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;   
    }

    public function __set($name, $value){
        echo "LLAMANDO A SET: Añadiendo propiedad '$name' con valor '$value'<br>";
        $this->nuevasPropiedades[$name] = $value;
    }

    public function __get($name){
        echo "LLAMANDO A GET: Obteniendo el valor de la propiedad '$name'<br>";
        return $this->nuevasPropiedades[$name] ?? "La propieda '$name' no exite"; 
    }

    public function mostrarInformacion(){
        echo "Nombre: {$this->nombre}, Edad: {$this->edad}<br>";
        foreach ($this->nuevasPropiedades as $key => $value) {
            echo $key . ": " . $value. "<br>";
        }

        echo "Informacion Clase Persona<br>";
        echo print_r($this);
    }

}
?>