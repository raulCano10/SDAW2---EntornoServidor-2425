<?php
require_once 'ConexionSOAP.php';

class CosaNostraService {

    private $conexion;

    public function __construct() {
        $this->conexion = (new ConexionSOAP())->getConexion();
    }

    public function getTraidores($lealtad) {        
        $stmt = $this->conexion->prepare("SELECT id, nombre, lealtad FROM miembros WHERE lealtad < ?");
        $stmt->bind_param("i", $lealtad);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $traidores = $resultado->fetch_all(MYSQLI_ASSOC);
        return $traidores;
    }   
  
}
?>
