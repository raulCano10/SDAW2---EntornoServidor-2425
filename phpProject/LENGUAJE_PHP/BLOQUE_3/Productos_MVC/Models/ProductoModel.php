<?php
require_once __DIR__ . '/ConexionModel.php';

class ProductoModel{
    private $conexionBD;

    public function __construct(){
        $this->conexionBD = (new ConexionModel())->getConnection();
    }

    public function insertar($codigo, $nombre, $precio, $cantidad){
        $consulta = "INSERT INTO productos (codigo, nombre, precio, cantidad) VALUE (?,?,?,?)";
        $stmt = $this->conexionBD->prepare($consulta);
        $stmt->bind_param("isdi",$codigo, $nombre, $precio, $cantidad);
        return $stmt->execute();
    }

    public function actualizar($codigo, $nombre, $precio, $cantidad){

    
    }

    public function eliminar($codigo){

    }

    public function getProducto($codigo){

    }

}

?>