<?php

require_once __DIR__ . '/ConexionModel.php';
class StockModel{
    private $conexion;

    public function __construct(){
        $this->conexion = ConexionModel::connect();
    }

    public function restarUnidades($codigoProducto,$tiendaOrigen, $unidades){
        $consulta = "UPDATE stock SET unidades = unidades - ? WHERE producto = ? AND tienda = ?";
        $stmt = $this->conexion->prepare($consulta);
        $stmt->bind_param("isi", $unidades,$codigoProducto,$tiendaOrigen);
        $stmt->execute();
        return $stmt->affected_rows; //Devuelve el numero de filas afectadas la relizar el UPDATE
    }

    public function insertarUnidades($codigoProducto,$tiendaDestino, $unidades){
        $consulta = "INSERT INTO stock (producto, tienda, unidades) VALUES (?,?,?)";
        $stmt = $this->conexion->prepare($consulta);
        $stmt->bind_param("sii", $unidades,$codigoProducto, $tiendaOrigen);
        $stmt->execute();
        return $stmt->affected_rows; //Devuelve el numero de filas afectadas la relizar el UPDATE
    }

    public function obtenerStockPorCodigoProducto($codigoProducto){
        $consulta = "SELECT t.nombre, p.nombre, s.unidades
        FROM stock AS s
        INNER JOIN tienda AS t ON s.tienda = t.cod
        INNER JOIN producto AS p ON s.producto = p.cod 
        WHERE p.cod = ?";
        $stmt = $this->conexion->prepare($consulta);
        $stmt->bind_param("s",$codigoProducto);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

    }
}
?>