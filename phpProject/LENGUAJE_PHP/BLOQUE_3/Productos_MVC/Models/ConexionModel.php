<?php
/*
CREATE DATABASE tienda;
USE tienda;
CREATE TABLE productos(
    codigo INT PRIMARY KEY,
    nombre VARCHAR(100),
    precio DECIMAL(10,2),
    cantidad INT
    );
*/

class ConexionModel{
    private $server = "localhost";
    private $userName = "root";
    private $pass = "";
    private $db = "tienda";

    private $conexion;

    public function __construct(){

        try{
            $this->conexion = new mysqli($this->server, $this->userName, $this->pass, $this->db);

        }catch(Exception $ex){
            if($this->conexion->connect_errno){
                echo "Error en la conexion: " . $this->conexion->connect_error;
            }else{
                echo "Exception capturada: " . $ex->getMessage();
            }

        exit();
        }
        
    }

    public function getConnection(){
        return $this->conexion;
    }
}

?>