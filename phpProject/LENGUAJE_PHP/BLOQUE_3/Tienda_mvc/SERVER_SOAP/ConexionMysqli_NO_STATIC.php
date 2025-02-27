<?php

class ConexionMysqli_NO_STATIC{

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
            $this->conexion = new mysqli($this->server, $this->usuario, $this->pass, $this->bdName);
        }catch(Exception $ex){
            if($this->conexion->connect_error){
                die("Error de conexion a BD ". $ex->getMessage());
            }else{
               die("ERROR.-" . $ex->getMessage());
            }
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