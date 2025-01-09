<?php

//Definimos una clase llamada coche
class Coche{

    public string $marca;
    public string $modelo;

    //vamos a crear un constructor para incializar las propiedades.
    //Todos los objetos que instanciemos de esta clase se van a inicializar con Marca y Modelo.
    //Este metodo se ejecuta siempre cuando instanciemos un objeto.
    //Si tenemos un constructor con dos parametros estamos obligados a crear el objeto pasandole esos dos parametros.
    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    //Creamos el metodo para mostrar la marca y el modelo del coche.
    public function pintaMarcaModelo(){
        //return "Mi coche es de la marca $this->marca y del modelo $this->modelo";
        return "Mi coche es de la marca {$this->marca} y del modelo {$this->modelo}";
    }
}

?>
