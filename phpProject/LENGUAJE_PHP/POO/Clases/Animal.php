<?php
class Animal{
    public $nombre;

    public function __construct($nombre){
        $this->nombre = $nombre;
    }

    public function Sonido(){
        return "El sonido de un animal depende del animal";
    }
}


class Perro extends Animal{
    public function Sonido(){
        return "GUAAAUUU GUAAAUUUU";
    }
}

Class Gato extends Animal{
     public function Sonido(){
         return "MIAUUUU MIAUUUU";
     }
}



?>