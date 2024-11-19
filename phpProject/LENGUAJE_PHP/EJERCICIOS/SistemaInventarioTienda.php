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

        1. Definir un array asociativo llamado inventario que contiene los siguientes productos Manzanas, pan y leche.
        Cada producto tiene un precio y una catidad de stock. 
        El precio de las manzanas es de 0.5 euros y hay 100 manzanas de stock
        El precio del pan es de de 1 euros y hay 50 barras de stock
        El precio de la leche 0.9 y hay 30 litros de stock

        2. Crea una funcion para agregar productos al inventario con un precio y una catidad.
        Si el producto ya existe en el inventario, la funcion debe actualizar la cantidad sumando 
        las unidades proporcionadas
        Se debe mostrar un mensaje indicando que el producto ha sido agreagado o actualizado correctamente.
        Si no exsite el producto se debe incluir junto con el precio y la cantidad indicada.
        
        3. Funcion comprar productos que permita al cliente comprar un producto:
        Si el producto no existe, mostrar mensjae de error.
        Si el stock es insuficiente para la cantidad solicitada, muestra mensaje de error.
        Si la compra se puede realizar, muestra un mensaje indicando la cantidad comprada, el nombre del producto el coste total.
        La funcion debe descontar la cantidad comprada del inventario

        4. Funcion mostrar inventario sin utilizar la funcion print_r
        Si el producto tiene menos de 10 unidades muestra un mensaje de advertencia junto al producto
        indicando que el stock es bajo.
        Muestra el inventario en un formato limpio y legible.

        */
		
		 // Definición del array asociativo para el inventario
        $inventario = [
            "manzana" => ["precio" => 0.5, "cantidad" => 100],
            "pan" => ["precio" => 1.2, "cantidad" => 50],
            "leche" => ["precio" => 0.9, "cantidad" => 30]
        ];

        // Función para agregar o actualizar un producto en el inventario
        function agregarProducto(&$inventario, $producto, $precio, $cantidad) {
            if (isset($inventario[$producto])) {
                $inventario[$producto]["cantidad"] += $cantidad; // Actualizar cantidad
            } else {
                $inventario[$producto] = ["precio" => $precio, "cantidad" => $cantidad]; // Agregar nuevo producto
            }
            echo "Producto \"$producto\" agregado/actualizado con éxito.<br>";
        }

        // Función para comprar un producto
        function comprarProducto(&$inventario, $producto, $cantidad) {
            if (!isset($inventario[$producto])) {
                echo "Error: El producto \"$producto\" no existe en el inventario.<br>";
                return;
            }
            if ($inventario[$producto]["cantidad"] < $cantidad) {
                echo "Error: No hay suficiente stock de \"$producto\".<br>";
                return;
            }
            $costoTotal = $inventario[$producto]["precio"] * $cantidad;
            $inventario[$producto]["cantidad"] -= $cantidad; // Descontar cantidad
            echo "Has comprado $cantidad unidades de \"$producto\" por un total de $$costoTotal.<br>";
        }

        // Función para mostrar el inventario y resaltar productos con bajo stock
        function mostrarInventario($inventario) {
            echo "<h3>Inventario de la Tienda:</h3>";
            foreach ($inventario as $producto => $info) {
                $estado = ($info["cantidad"] < 10) ? " (¡Stock bajo!)" : "";
                echo "$producto - Precio: $" . $info["precio"] . ", Cantidad: " . $info["cantidad"] . "$estado<br>";
            }
        }

        // Pruebas de las funciones
        agregarProducto($inventario, "manzana", 0.5, 50); // Actualizar stock de manzanas
        agregarProducto($inventario, "queso", 2.5, 15); // Agregar un nuevo producto
        comprarProducto($inventario, "pan", 10); // Comprar pan
        comprarProducto($inventario, "leche", 35); // Intentar comprar más leche de la disponible
        mostrarInventario($inventario); // Mostrar el inventario actualizado
    ?>
</body>
</html>