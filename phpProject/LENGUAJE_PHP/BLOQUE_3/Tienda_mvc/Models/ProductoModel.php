<?php

require_once __DIR__ . '/ConexionModel.php';

class ProductoModel{
    private $conexion;

    public function __construct() {
        $this->conexion = ConexionModel::connect();
    }

    public function obtenerProductos(){
        $consulta = "SELECT cod, nombre_corto FROM producto";
        $stmt = $this->conexion->prepare($consulta);
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
}

?>