<?php


/*
1. __destruct: Metodo especial que se llama automaticamente cuando el objeto es destruido o el script se finaliza.

2. exit(): Finaliza la ejecucion del script con un mensaje opcional. Y llama a __destruct

3. instanceof: Verifica si un objeto es una instancia de una clase especifica. 

4. get_class: Devuelve el nombre de la calse de objeto.

5. Class_exist: Comprueba si una clase está definida o no.

6. get_declared_classes: Lista todas las clases declaradas en el script.

7. class_alias: Permite crear un alias a la clase existente. Y a partir de ahi referirnos a la clase con el alias.

8. get_class_vars: Devuelve las propiedades a las que tengas acceso.

9. get_class_methods: Devuelve un array con los nombres de los metodos de una clase

10. metod_exists: Verifica si existe el metodo en una clase o en un objeto

11. get_objetc_vars: Devuelve las propiedades del objeto y sus valores.

12. property_exist: Devuelve si existe un apropiedad en un objeto o clase.
*/

class UtilizacionObjetos{
    public static $propiedad1 = "valor propiedad 1";
    public $propiedad2 = "valor propiedad 2";
    private $propiedadPrivada = "valor privado";

    public function metodo1(){
        echo "Este es el metodo 1 <br>";
    }

    public function metodo2(){
        echo "Este es el metodo2 <br>";
    }

    public function __destruct(){
        echo "El objeto de la clase UtilizacionObjetos está siendo DESTRUIDO!!!";
    } 
    
}

echo "<pre>";
$objeto = new UtilizacionObjetos();

if($objeto instanceof UtilizacionObjetos){
    echo "3. Sí el objeto pertenece a la clase  UtilizacionObjetos <br>";
}

echo "4. El objeto es de la clase: " . get_class($objeto) . "<br>";

if(class_exists('UtilizacionObjetos')){
echo "5. La clase UtilizacionObjetos si existe<br>";
}else{
    echo "5. La clase UtilizacionObjetos NO existe<br>";
}

if(class_exists('AAAAA')){
    echo "5. La clase AAAAA si existe<br>";
}else{
    echo "5. La clase AAAAA NO existe<br>";
}
    
//exit("FINALIZA EL SCRIPT!!!!!!");

echo "6. Clases declaradas en el script<br>";
echo "<hr>";
print_r(get_declared_classes());

// Creamos el alias
class_alias('UtilizacionObjetos','aliasUtilizacionObjetos');

//$objetoAlias = new aliasUtilizacionObjetos();
//echo "7. El objeto creado con el alias es de la clase: ". get_class($objetoAlias). "<br>";

echo "8. Propiedades estaticas de la clase";
echo print_r(get_class_vars('UtilizacionObjetos'));

echo "9. Nombre de los metodos de una clase:<br>";
echo print_r(get_class_methods($objeto));

if(method_exists($objeto,'metodo1')){
    echo "10. El metodo 'metodo1' si existe en el objeto";
}else{
    echo "10. El metodo 'metodo1' NO existe en el objeto";
}

echo "11. Propiedades del objeto";
print_r(get_object_vars($objeto));

if(property_exists($objeto,'propiedad1')){
    echo "12. La propiedad1 si existe en el objeto";
}else{
    echo "12. La propiedad1 'metodo1' NO existe en el objeto";
}

echo "</pre>";

?>