<?php

require_once __DIR__ . "/../Models/ContactosModel.php";

class ContactosController{
    private $contactosModel;

    public function __construct(){
        $this->contactosModel = new ContactosModel();
    }

    public function getContactos(){
        return $this->contactosModel->getContactos();
    }


}
?>