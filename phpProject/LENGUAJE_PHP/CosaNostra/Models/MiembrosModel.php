<?php

require_once __DIR__ . "/../Config/Conexion.php";

class MiembrosModel{

    private $conexion;

    public function __construct(){
        $this->conexion = Conexion::connectPDO();
    }

    public function getMiembros(){
        $stmt = $this->conexion->prepare("SELECT * FROM miembros");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }


}

?>