<?php

require_once __DIR__ . "/../Models/OperacionesModel.php";

class OperacionesController{
    private $model;
    public function __construct(){
        $this->model = new OperacionesModel();      
    }

    public function getOperaciones($valor){
        return $this->model->getOperaciones($valor);
    }
}

?>