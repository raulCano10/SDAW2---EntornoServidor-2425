<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>
<body>
    <?php
        //Debemos importar los archivos que queremos utilizar.    
        require_once('Clases/Coche.php');
        require_once('Clases/Animal.php');

        //Instanciamos la clase Coche
        //Vamos a crear un objeto Coche
        // $coche1 = new Coche;
        //var_dump($coche1);
        // $coche1->marca = "SEAT";
        // $coche1->modelo = "IBIZA";
        // var_dump($coche1);
        // $coche2 = new Coche;
        // $coche2->marca = "AUDI";
        // $coche2->modelo = "Q7";
        // var_dump($coche2);
        // //Acceso a una propiedad
        // echo "Tengo dos coches: Un {$coche1->marca} y un {$coche2->marca}";

        //$coche3 = new Coche("SEAT","IBIZA");
        //echo "Mi coche es de la marca $coche3->marca y del modelo $coche3->modelo";
        //echo $coche3->pintaMarcaModelo(). "<br>";

        $animal1 = new Animal("Boby");
        $animal2 = new Perro("Lassy");
        $animal3 = new Gato("Misino");
        echo "<pre>";
        // echo "<br>El sonido de Boby es: " . $animal1->Sonido() . "<br>";
        // echo "<br>El sonido de Lassy es: " . $animal2->Sonido() . "<br>";
        // echo "<br>El sonido de Misino es: " . $animal3->Sonido() . "<br>";


        //POLIMORFISMO
        function getSonidoAnimal(Animal $animal){
            return $animal->Sonido();
        }
         echo "<br>El sonido de Boby es: " . getSonidoAnimal($animal1) . "<br>";
         echo "<br>El sonido de Lassy es: " . getSonidoAnimal($animal2) . "<br>";
         echo "<br>El sonido de Misino es: " . getSonidoAnimal($animal3) . "<br>";

        
        echo "</pre>";
    ?>



</body>
</html>