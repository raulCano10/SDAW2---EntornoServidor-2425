<!DOCTYPE html>

<html>
<head> 
    <title> SISTEMA INVENTARIO TIENDA </title>
</head>
<body>
    <?php
        /*
        Desarrolla un sistema de gestion de inventario de una tienda que vende varios productos
        El sistema debe ser capaz de realizar las siguientes acciones:

########1. Definir un array asociativo llamado inventario que contiene los siguientes productos Manzanas, pan y leche.
        Cada producto tiene un precio y una catidad de stock. 
        El precio de las manzanas es de 0.5 euros y hay 100 manzanas de stock
        El precio del pan es de de 1 euros y hay 50 barras de stock
        El precio de la leche 0.9 y hay 30 litros de stock
########2. Crea una funcion para agregar productos al inventario con un precio y una catidad.
        Si el producto ya existe en el inventario, la funcion debe actualizar la cantidad sumando 
        las unidades proporcionadas
        Se debe mostrar un mensaje indicando que el producto ha sido agreagado o actualizado correctamente.
        Si no exsite el producto se debe incluir junto con el precio y la cantidad indicada. 
########3. Funcion comprar productos que permita al cliente comprar un producto:
        Si el producto no existe, mostrar mensaje de error.
        Si el stock es insuficiente para la cantidad solicitada, muestra mensaje de error.
        Si la compra se puede realizar, muestra un mensaje indicando la cantidad comprada, 
        el nombre del producto el coste total.
        La funcion debe descontar la cantidad comprada del inventario
########4. Funcion mostrar inventario sin utilizar la funcion print_r
        Si el producto tiene menos de 10 unidades muestra un mensaje de advertencia junto al producto
        indicando que el stock es bajo.
        Muestra el inventario en un formato limpio y legible.

        */
    ?>
</body>
</html>