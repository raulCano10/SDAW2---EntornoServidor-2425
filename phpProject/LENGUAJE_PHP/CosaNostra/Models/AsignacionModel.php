<?php

require_once __DIR__ . "/../Config/Conexion.php";

class AsignacionModel{

    private $conexion;
    private $con;

    public function __construct(){
        $this->conexion = Conexion::connectPDO();
    }

    public function getConexion(){
        return $this->conexion;
    }

    public function eliminarTraidor($idTraidor){
        $stmt = $this->conexion->prepare("DELETE FROM miembrosssss WHERE id = ?");
        $stmt->execute([$idTraidor]);
    }

    public function existeAsignacion($id_miembro, $id_operacion){
        $consulta = "SELECT * FROM asignaciones WHERE id_miembro = $id_miembro AND id_operacion = $id_operacion";
        $stmt = $this->conexion->prepare($consulta);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function asignarOperacion($id_miembro, $id_operacion){
        // $consulta = "INSERT INTO asignaciones (id_miembro, id_operacion, fecha) VALUES ($id_miembro, $id_operacion, NOW())";
        // $stmt = $this->conexion->prepare($consulta);
        // $stmt->execute();

        $consulta = "INSERT INTO asignaciones (id_miembro, id_operacion, fecha) VALUES (?, ?, NOW())";
        $stmt = $this->conexion->prepare($consulta);
        $stmt->execute([$id_miembro,$id_operacion]);
    }
    


}

?>