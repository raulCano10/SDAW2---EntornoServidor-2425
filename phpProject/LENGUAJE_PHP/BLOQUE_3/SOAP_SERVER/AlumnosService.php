<?php

class AlumnosService{
    private $conexion;

    public function __construct(){
        $server = "localhost";
        $userName = "root";
        $pass = "";
        $db = "ies_bd";

        try{
       
        $this->conexion = new PDO("mysql:host=$server;dbname=$db;charset=utf8",$userName,$pass);
        $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        echo "Conexion realizada con exito. <br>";
        }catch(Exception $ex){
            throw new Exception("Error al conectar con ies_bd " . $ex->getMessage());
        }
        
    }

    public function getHola($nombre){
        return "HOLA " . $nombre . "COMO ESTAS. ESTAMOS EN ALUMNOS SERVICE";
    }

    public function obtenerAlumno($id){
        try{
            $stmt = $this->conexion->prepare("SELECT * FROM alumnos WHERE id = :id");
            $stmt->execute(['id' => $id]);
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            if($usuario){
                return $usuario;
            }else{
                return "Alumno no encontrado";
            }
        }catch(Exception $ex){
            return "Error al obtener Alumno" . $ex->getMessage();
        }
    }
}




?>