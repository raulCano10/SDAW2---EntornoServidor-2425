<?php

require_once __DIR__ . '/../Models/ProductoModel.php';

class ProductoController{
    private $productoModel;

    public function __construct() {
        $this->productoModel = new ProductoModel();
        
    }

    public function gestionarProducto($codigo,$nombre,$precio,$cantidad): string{
        try{
            $mensaje = "";

            if(!$codigo){
                return "FALTA EL CODIGO!!! Sin codigo no hago nada";
            }

            $productoExistente = $this->productoModel->getProducto($codigo);

            //LOGICA
            //$this->productoModel->insertar();
            
            return $mensaje;
        }catch(Exception $ex){       
            return "ERROR al gestionar el producto: " . $ex->getMessage();
        }
        
    }

    
}

?>