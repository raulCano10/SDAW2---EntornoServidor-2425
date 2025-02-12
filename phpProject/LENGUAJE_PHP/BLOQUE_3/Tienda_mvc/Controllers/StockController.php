<?php
require_once __DIR__ . "/../Models/StockModel.php";

class StockController{
    private $stockModel;
    private $conexion;
    public function __construct(){
        $this->stockModel = new StockModel();
        $this->conexion = ConexionModel::connect();
    }

    public function transferirUnidades($codigoProducto,$tiendaOrigen, $tiendaDestino, $unidades ){
        //Abrir una transacccion
        $this->conexion->begin_transaction();

        try{
            //Llamar a funcion que reste las unidades en tienda origen que le paso por parametro a la funcion transferirUnidades
            $numeroFilasAfectada = $this->stockModel->restarUnidades($codigoProducto,$tiendaOrigen, $unidades);
            if($numeroFilasAfectada == 0){
                echo "filas afectadas 0";
                throw new Exception("Error filas afectadas 0");
            }
            //Llamar a funcion que sume las unidades en tienda destino que le paso por parametro a la funcion transferirUnidades
            $this->stockModel->insertarUnidades($codigoProducto,$tiendaDestino, $unidades);

            //Realiza la logica de mi programa

            $this->conexion->commit();
            return "Tranferencia relizada con éxito!!!";
        }catch(Exception $ex){
            $this->conexion->rollback();
            return "Error en la transferencia de unidades: " . $ex->getMessage();
        }
        
    }

    public function obtenerStockPorCodigoProducto($codigoProducto){
        return $this->stockModel->obtenerStockPorCodigoProducto($codigoProducto);
    }

}

?>