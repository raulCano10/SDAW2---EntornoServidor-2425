<?php
require_once __DIR__ . "/../Models/ProductoModel.php";

class ProductoController{
    private $productoModel;

    public function __construct() {
        $this->productoModel = new ProductoModel();
    }

    public function obtenerProductos(){
        $productos = $this->productoModel->obtenerProductos();
        return $productos;
    }
}
?>