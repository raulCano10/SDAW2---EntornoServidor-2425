<?php

class Conexion{
    private $server = "localhost";
    private $username = "root";
    private $pass = "";
    private $db = "agenda";
    private $conexion;
    public function __construct(){


        try{
            $this->conexion = new mysqli($this->server, $this->username, $this->pass, $this->db);
            echo "Conexion establecida correctamente";
        }catch(Exception $ex){
            // if($this->conexion->connect_errno){
            //     echo "Error en la conexion " . $this->conexion->connect_error;
            // }else{
                echo "Exception capturada" . $ex->getMessage();
            //}
            exit();
        }
    }

    public function getConexion(){
        return $this->conexion;
    }
}

?>