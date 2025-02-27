<?php
require_once __DIR__ . "/../Models/ProductoModel.php";

class ProductoController{
    private $productoModel;
    private $falimiaModel;

    public function __construct() {
        $this->productoModel = new ProductoModel();
        //$this->familiaModel = new FamiliaModel();
    }

    public function obtenerProductos(){   
            $productos = $this->productoModel->obtenerProductos();
            return $productos;
    }

    public function obtenerProductosSOAP(){
        $options = [
            'location' => 'http://localhost/soap_server/server.php',
            'uri' => 'http://localhost/soap_server/',
            'trace' => 1,
            'exceptions' => true
        ];
        
        try{
        
            $clienteSOAP = new SoapClient(null,$options);
        
            $clienteSOAP->obtenerProductos();
        
            echo "<pre>";
            print_r($clienteSOAP);
            echo "</pre>";
        
        }catch(Exception $ex){
            echo "ERROR en la llamada SOAP " . $ex->getMessage();
        }
    }

    public function obtenerProductosSOAPcliente($clienteSOAP){
        $clienteSOAP->obtenerProductos();
    }

}
?>