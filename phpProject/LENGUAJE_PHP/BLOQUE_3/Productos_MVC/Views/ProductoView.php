<?php
    require_once __DIR__ . '/../Controllers/ProductoController.php';

    $productoController = new ProductoController();
    $mensaje = "";
    if($_POST){
        //Recoger los datos de los campos del formulario
        
        //Enviar los datos al controller
        $mensaje = $productoController->gestionarProducto($codigo, $nombre, $precion, $cantidad);
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
</head>

<body>
    
</body>
</html>

