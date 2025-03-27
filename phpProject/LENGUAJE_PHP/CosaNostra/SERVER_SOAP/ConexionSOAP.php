<?php

class ConexionSOAP {
    private $dbHost = "localhost";
    private $dbUser = "root";
    private $dbPass = "";
    private $dbName = "cosa_nostra";
    private $conexion = null;

    public function __construct(){
        $this->connectMysqli();
    }

    private function connectMysqli()
    {
        try {
            $this->conexion = new mysqli($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        } catch (Exception $e) {
            if ($this->conexion->connect_error){
                die("Error de conexión a la base de datos: " . $e->getMessage());
            }else{
                echo "ERROR.-" . $e->getMessage();
            }
            
            exit;
        }
    }

    public function getConexion() {
        if ($this->conexion === null) {
            $this->connectMysqli();
        }
        return $this->conexion;
    }
}
