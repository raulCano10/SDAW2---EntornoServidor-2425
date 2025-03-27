<?php
require_once __DIR__ . "/../Models/MiembrosModel.php";

class MiembrosController{
    private $model;
    public function __construct(){
        $this->model = new MiembrosModel();

    }

    public function getMiembros(){
        return $this->model->getMiembros();
    }
}
?>