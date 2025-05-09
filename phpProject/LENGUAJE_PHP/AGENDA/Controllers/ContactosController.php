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

    
    public function getContacto($id){
        return $this->contactosModel->getContacto($id);
    }

    public function insertarContacto($nombre,$email,$telefono,$direccion){
        return $this->contactosModel->insertarContacto($nombre,$email,$telefono,$direccion);
    }

    public function actualizarContacto($id,$nombre,$email,$telefono,$direccion){
        return $this->contactosModel->actualizarContacto($id,$nombre,$email,$telefono,$direccion);
    }
}
?>