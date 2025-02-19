<?php

class AlumnosService{
    //private $conexion;

    public function __construct(){
        // $server = "localhost";
        // $userName = "root";
        // $pass = "";
        // $db = "ies_bd";

        // try{
       
        // $conexion = new PDO("mysql:host=$server;dbname=$db;charset=utf8",$userName,$pass);
        // $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // echo "Conexion realizada con exito. <br>";
        // }catch(Exception $ex){
        //     throw new Exception("Error al conectar con ies_bd " . $ex->getMessage());
        // }
        
    }

    public function getHola($nombre){
        return "HOLA " . $nombre . "COMO ESTAS. ESTAMOS EN ALUMNOS SERVICE";
    }
}




?>