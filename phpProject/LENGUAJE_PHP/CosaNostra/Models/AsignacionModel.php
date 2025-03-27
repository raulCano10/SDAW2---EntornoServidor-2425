<?php

require_once __DIR__ . "/../Config/Conexion.php";

class AsignacionModel{

    private $conexion;
    private $con;

    public function __construct(){
        $this->conexion = Conexion::connect();
    }

    public function getConexion(){
        return $this->conexion;
    }

    public function eliminarTraidor($idTraidor){
        $stmt = $this->conexion->prepare("DELETE FROM miembrosssss WHERE id = ?");
        $stmt->execute([$idTraidor]);
    }


}

?>