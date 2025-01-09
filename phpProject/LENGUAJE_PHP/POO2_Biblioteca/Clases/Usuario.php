<?php

class Usuario implements IUsuario{
    public function obtenerRol(){
        echo "Soy un Usuario generico";
    }
}

class Lector extends Usuario implements IPrestamo{
 public function prestarLibro($libro){

 }

 public function devolverLibro($libro){

 }
 
}

class Bibliotecario extends Usuario implements IPrestamo,IGestion{
    public function gestionarInventario(){

    }

    public function prestarLibro($libro){

    }

    public function devolverLibro($libro){
        
    }
}

?>