<?php

class Producto{
    public string $nombre;
    public static $num_Productos;

    public function __construct(){
        $this->nombre = "ALMENDRAS";
        self::$num_Productos++;

    }

    public function __destruct(){
        self::$num_Productos--;
    }

    public function __clone(){
        echo "ME ESTAN CLONANDO";
    }
}

$producto1 = new Producto();
$producto1->nombre = "Samsumg galaxy";
$producto2 = $producto1;


$producto3 = clone($producto1);

///Producto::$num_Productos;

?>