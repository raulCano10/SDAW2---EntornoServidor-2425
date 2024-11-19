<!DOCTYPE html>

<html>
<head> 
    <title> ARRAYS </title>
</head>
<body>
    <?php
        //1. Crea un array $dias con los dias de la semana 
        //y muestra el array por pantalla con un FOREACH
        $dias = array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo");

        // foreach ($dias as $value) {
        //     echo "". $value ."<br>";
        // }

        
         foreach ($dias as $indice => $value) {
             echo "Indice: " . $indice . " Valor: ". $value ."" ."<br>";
         }

        //2. Crea un aray con los 1000 primeros numeros pares 
        //y despues muestra el resultado los 10 primeros pares.
        //$numeros = [2,4,6,8,10....1000];
         $numeroPares = [];
         for ($i = 1; $i <= 1000; $i++)
         {
            $numeroPares[] = $i * 2; //$i + 2 // $i % 2
         }

         foreach($numeroPares as $par){
            echo "". $par ."<br>";
         }

        //3. Crear un vector asociativo y lo imprimimos por pantalla
        //1 - 90
        //30 - 45
        //MU - Murcia
        //e - 99
        $v = [
            1 => 90,
            30 => 45,
            "MU" => "Murcia",
            'e' => 99
        ];

        foreach ($v as $key => $value) {
          echo "Key: " . $key . ", Valor: ". $value ."<br>";
        }

        //4. Crea un array de dos dimensiones (multidimensional) de manera que 
        //una dimension contenga el Tipo de colores (Fuerte , Suave)
        // y la segunda dimension Muestre 3 colores de cada tipo
        //por ejemplo: Rojo seria un color fuerte y azul celeste un colo suave
        // Mostrar el array completo por pantalla 
        $colores = [
            "Fuerte" => ["Rojo", "Azul", "Verde"],
            "Suave" => ["Azul Celeste", "Gris", "Rosa"]
        ];

        echo "<pre>";
        print_r($colores);
        echo "</pre>";

        //5. Busca en el array anterior si existen los colores ROJO y ROSA
        // utilizando la funcion in_array().
        // Muestra por pantalla si has encontrado o no el color.
        if(in_array("Rojo",$colores["Fuerte"]) 
        || in_array("Rojo",$colores["Suave"])){
            echo "Existe el color Rojo";
        }else{
            echo "No existe el color Rojo";
        }

        if(in_array("Rosa",$colores["Fuerte"]) 
        || in_array("Rosa",$colores["Suave"])){
            echo "Existe el color Rosa";
        }else{
            echo "No existe el color Rosa";
        }

         //Ordenar arrays con las funciones:
         //krsort, arsort, ksort, asort, sort

         $ordenacion = ["cinco" => 5, "uno" => 1, "cuatro" => 4, "tres" => 3, "dos" => 2];
         echo "<br><br>";
         //Funcion: sort
         //Ordenar de MENOR a MAYOR por VALOR (Sin mantener los indices)
         $arraySort = $ordenacion;
         sort($arraySort);
         echo "Array ordenado con sort:<br>";
         print_r($arraySort);
         echo "<br><br>";

         //Funcion: asort
         //Ordenar de MENOR a MAYOR por VALOR (Mantener los indices)
         $arrayAsort = $ordenacion;
         asort($arrayAsort);
         echo "Array ordenado con asort:<br>";
         print_r($arrayAsort);
         echo "<br><br>";


         //Funcion: arsort
         //Ordenar de MAYOR a MENOR por VALOR (Manteniendo los indices)
         $arrayArsort = $ordenacion;
         arsort($arrayArsort);
         echo "Array ordenado con arsort:<br>";
         print_r($arrayArsort);
         echo "<br><br>";

         //Funcion: Ksort
         //Ordenar de MENOR a MAYOR por CLAVE
         $arrayKsort = $ordenacion;
         ksort($arrayKsort);
         echo "Array ordenado con ksort:<br>";
         print_r($arrayKsort);
         echo "<br><br>";

         //Funcion: krsort
         //Ordenar de MAYOR a MENOR por CLAVE 
         $arraykrsort = $ordenacion;
         krsort($arraykrsort);
         echo "Array ordenado con krsort:<br>";
         print_r($arraykrsort);
         echo "<br><br>";

         //Ejercicio 6 Crea un array con los paises de la EU y sus capitales. 
         //Parte 1: Muestra por cada uno "La capital de XXXX es YYYY"
         //Parte 2: Despues ordena la lista por nombre de pais y despues por nombre de capital.
         //Parte 3: Elimina algun pais - capital del array
        $paises = ["Alemania" => "Berlín",
        "Francia" => "Paris",
        "Italia" => "Roma",
        "España" => "Madrid",
        "Paises Bajos" => "Amsterdam"];

        echo "<hr>";
        foreach ($paises as $pais => $capital) {
            echo "La capital de {$pais} es {$capital} <br>";
        }
         
        ksort($paises); //Ordenar por pais (key)
        echo "<hr>";
        foreach ($paises as $pais => $capital) {
            echo "La capital de {$pais} es {$capital} <br>";
        }
        echo "<hr>";
        asort($paises);//Ordenar por capitales (valor)

        foreach ($paises as $pais => $capital) {
            echo "La capital de {$pais} es {$capital} <br>";
        }

        unset($paises["Francia"]);
        
        echo "<hr>";
        foreach ($paises as $pais => $capital) {
            echo "La capital de {$pais} es {$capital} <br>";
        }
		
		

    ?>
</body>
</html>
