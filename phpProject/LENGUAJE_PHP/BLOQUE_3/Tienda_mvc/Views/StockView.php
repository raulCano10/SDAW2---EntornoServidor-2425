<?php

require_once __DIR__ . "/../Controllers/StockController.php";
require_once __DIR__ . "/../Controllers/ProductoController.php";

$stockController = new StockController();
//Codigo producto, tienda origen, tienda destino y unidades a traspasar
//resutado string: Me saje de si la tranferencia esta OK o ha dado algun error.
$resultado = $stockController->transferirUnidades("3DSNG", 1, 3, 1);

$productoController = new ProductoController();
$productos = $productoController->obtenerProductos();

if($_SERVER['REQUEST_METHOD'] === 'POST' 
    && isset($_POST['codProducto'])){
        $codigoProducto = $_POST['codProducto'];
        $stock = $stockController->obtenerStockPorCodigoProducto($codigoProducto);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de Tranferencia Unidades</title>
</head>
<body>
    <?php
        echo $resultado;
    ?>

    <h2>Consultar Stock de un Producto</h2>
    <form method="POST">
        <label for="codProducto">Seleccionar Producto:</label>
        <select name="codProducto" id="codProducto">
            <?php
            foreach($productos as $producto){?>
                <option value="<?php echo $producto['cod']; ?>">
                    <?php echo $producto['nombre_corto'];?>
                </option>
            <?php
            }
            ?>
        </select>
        <button type="submit">Consultar Stock</button>
    </form>

    <?php if(!empty($stock)){ ?>        
        <h3>STOCK DISPONIBLE</h3>
        <table border="1">
            <tr>
                <th>Tienda</th>
                <th>Producto</th>
                <th>Unidades</th>
            </tr>
        <?php foreach($stock as $registroStock){ ?>
            <tr>
                <td><?php echo $registroStock['tienda'];?></td>
                <td><?php echo $registroStock['NombreCortoProducto'];?></td>
                <td><?php echo $registroStock['unidades'];?></td>
            </tr>
         <?php } ?>
        </table>   
        <?php }?>
</body>
</html>

