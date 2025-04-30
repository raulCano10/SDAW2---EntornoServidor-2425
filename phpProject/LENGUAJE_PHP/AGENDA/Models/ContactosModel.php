<?php

require_once __DIR__ . "/../Config/Conexion.php";

class ContactosModel{
    private $conexion;

    public function __construct(){
        $this->conexion = (new Conexion())->getConexion();
    }

    //Funciones de acceso a la Base de datos
    public function getContactos(){
        $consulta = "SELECT * FROM contactos";
        $stmt = $this->conexion->prepare($consulta);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

        // $resultado = $stmt->get_result();
        // $arrayAsocContactos = $resultado->fetch_all(MYSQLI_ASSOC);
        // return $arrayAsocContactos;
    }

    public function getContacto($id){
        $consulta = "SELECT * FROM contactos WHERE id_contacto = $id";
        //$consulta = "SELECT * FROM contactos WHERE id_contacto = ?";
        $stmt = $this->conexion->prepare($consulta);
        //$stmt->bind_param("i",$id);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }
}
?>