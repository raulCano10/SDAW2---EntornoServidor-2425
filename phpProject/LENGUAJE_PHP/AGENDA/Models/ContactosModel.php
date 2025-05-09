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

    public function insertarContacto($nombre,$email,$telefono,$direccion){
        //$consulta = "INSERT INTO contactos (nombre, email, tlf, direccion) VALUES ($nombre,$email,$telefono,$direccion)";
        $consulta = "INSERT INTO contactos (nombre, email, tlf, direccion) VALUES (?,?,?,?)";
        $stmt = $this->conexion->prepare($consulta);
        $stmt->bind_param("ssss",$nombre,$email,$telefono,$direccion);
        return $stmt->execute();

    }

    public function actualizarContacto($id,$nombre,$email,$telefono,$direccion){
        //$consulta = "UPDATE contactos SET nombre = $nombre , email = $email , tlf = $telefono, direccion = $direccion WHERE id_contacto = $id";
        $consulta = "UPDATE contactos SET nombre = ? , email = ? , tlf = ?, direccion = ? WHERE id_contacto = ?";
        $stmt = $this->conexion->prepare($consulta);
        $stmt->bind_param("ssssi",$nombre,$email,$telefono,$direccion,$id);
        return $stmt->execute();
  
    }
}
?>