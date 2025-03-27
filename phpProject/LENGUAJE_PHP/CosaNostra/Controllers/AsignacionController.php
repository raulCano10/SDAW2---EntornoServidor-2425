<?php
require_once __DIR__ . "/../Models/AsignacionModel.php";
require_once __DIR__ . "/../Intefaces/IAsignacion.php";

class Asignacioncontroller implements IAsignacion{
    private $model;
    private $conexion;
    public function __construct(){
        $this->model = new AsignacionModel();
    }

    public function asignarOperacion($id_miembro, $id_operacion){

    }

    public function procesarTraidores($traidores){
        $this->conexion = $this->model->getConexion();
        try{
            //Abrir transaccion
            $this->conexion->beginTransaction();

            //Ejecutaré todas las consultas que yo quiera
            foreach($traidores as $traidor){
                $this->model->eliminarTraidor($traidor['id']);
                echo "Eliminado " . $traidor['nombre'];
            }

            $this->conexion->commit();
        }catch(Exception $ex){
            $this->conexion->rollBack();
            echo "Error al realizar la transaccion" . $ex->getMessage();
        }
    }
}
?>