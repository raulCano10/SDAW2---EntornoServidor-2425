<?php

class ConexionPDO_NO_STATIC{

    private $server = "localhost";
    private $usuario = "root";
    private $pass = "";
    private $bdName = "dwes";
    private $conexion = null;

    public function __construct(){
        $this->connect();
    }

    private function connect(){
        try{
            $this->conexion = new PDO("mysql:host=$this->server;dbname=$this->bdName;charset=utf8",$this->usuario, $this->pass);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(Exception $ex){
            error_log("Error de conexion con BD" . $ex->getMessage());
        }
    }

    public function getConexion(){
        if($this->conexion == null){
            $this->connect();
        }
        return $this->conexion;
    }
}


?>