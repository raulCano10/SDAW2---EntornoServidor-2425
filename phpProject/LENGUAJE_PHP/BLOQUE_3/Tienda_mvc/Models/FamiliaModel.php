<?php

require_once __DIR__ . "/ConexionModel.php";

class FamiliaModel{
private $conexion;
    public function __construct(){
        $this->conexion = ConexionModel::connect();
    }

    public function obtenerFamilias(){
        $consulta= "SELECT * FROM familia";
        $stmt = $this->conexion->prepare($consulta);
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
}

?>
