<?php

require_once __DIR__ . '/ConexionMysqli_NO_STATIC.php';
require_once __DIR__ . '/ConexionMysqli_STATIC.php';
require_once __DIR__ . '/ConexionPDO_NO_STATIC.php';
require_once __DIR__ . '/ConexionPDO_STATIC.php';

class ProductoServices {
    private $conexion1;
    private $conexion2;
    private $conexion3;
    private $conexion4;

    public function __construct() {
        $this->conexion1 = ConexionMysqli_STATIC::connect();
        $this->conexion2 = ConexionPDO_STATIC::connect();
        $this->conexion3 = (new ConexionMysqli_NO_STATIC())->getConexion();
       $this->conexion4 = (new ConexionPDO_NO_STATIC())->getConexion();
    }

    public function obtenerProductos(){
        
        $consulta = "SELECT cod, nombre_corto FROM producto";
        $stmt = $this->conexion3->prepare($consulta);
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
}

?>