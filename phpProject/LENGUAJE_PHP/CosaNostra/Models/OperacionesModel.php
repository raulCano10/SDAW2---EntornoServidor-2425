<?php 

require_once __DIR__ . "/../Config/Conexion.php";

class OperacionesModel{
    private $conexion;

    public function __construct(){
        $this->conexion = Conexion::connectPDO();
    }

    public function getOperaciones($valor){       
        $consulta = "SELECT * FROM Operaciones WHERE valor_estimado > $valor";
        $stmt = $this->conexion->prepare($consulta);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>


    