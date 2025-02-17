<?php
require_once __DIR__ . "/../Models/FamiliaModel.php";

class FamiliaController{
    private $familiaModel;

    public function __construct(){
        $this->familiaModel = new FamiliaModel();
    }

    public function obtenerFamilias(){
        return $this->familiaModel->obtenerFamilias();
    }
    
}

?>