<?php

class Producto{
    private $nombre;
    private $precioBase;

    public function __construct($nombre, $precioBase) {
        $this->nombre = $nombre;
        $this->precioBase = $precioBase;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getPrecioBase(){
        return $this->precioBase;
    }

}

class electrodomestico extends Producto{

    use Descuento,ConsumoEnergia;

    public function mostrarDetalles(){
        echo "Electrodomestico: {$this->getNombre()}";
        echo "Precio Base: {$this->getPrecioBase()}";
        echo "Descuento: {$this->getDescuento()}";
        echo "Descuento: {$this->calcularPrecio($this->getPrecioBase())}";
    }
}

class Mueble extends Producto{
    use Descuento;

    public function mostrarDetalles(){
        echo "Mueble: {$this->getNombre()}";
        echo "Precio Base: {$this->getPrecioBase()}";
        echo "Descuento: {$this->getDescuento()}";
        echo "Descuento: {$this->calcularPrecio($this->getPrecioBase())}";
    }
}

trait Descuento{
    private $descuento = 0;
    public function getDescuento(){
        return $this->descuento;
    }

    public function setDescuento($porcetaje){
        return $this->descuento = $porcetaje;
    }

    public function calcularPrecio($PrecioBase){
        return $PrecioBase - ($PrecioBase * $this->descuento / 100);
    }

}

trait ConsumoEnergia{
    private $consumoEnergia = 0;
    public function getConsumoEnergia(){
        return $this->consumoEnergia;
    }

    public function setConsumoEnergia($consumo){
        return $this->consumoEnergia = $consumo;
    }
}

?>