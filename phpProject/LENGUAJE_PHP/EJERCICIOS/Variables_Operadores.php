<!DOCTYPE html>

<html>
<head> 
    <title> VARIABLES Y OPERADORES </title>
</head>
<body>
    <?php
        
        /**
         * 1. Programa que cacule la 
         * Suma, resta, division, multiplicación, 
         * el resto y la media aritmetica de dos numeros;
         * */
        $num1 = 8;
        $num2 = 3;
        
        // Operaciones
        $suma = $num1 + $num2;
        $resta = $num1 - $num2;
        $multiplicacion = $num1 * $num2;
        $cociente = $num1 / $num2;
        $resto = $num1 % $num2;
        $media = ($num1 + $num2) / 2;
        
        // Resultados
        echo "Suma: " . $suma . "<br>";
        echo "Resta: " . $resta . "<br>";
        echo "Multiplicación: " . $multiplicacion . "<br>";
        echo "Cociente: " . $cociente . "<br>";
        echo "Resto: " . $resto . "<br>";
        echo "Media: " . $media . "<br>";

         /**
          * Calcula el area y 
          * el perimetro de un rectangulo dada su BASE Y ALTURA
          * (Inventar la base y altura)
          */
          $base = 6;
          $altura = 4;
  
          $perimetro = 2 * ($base + $altura);
          $area = $base * $altura;
  
          echo "Perímetro del rectángulo: " . $perimetro . "<br>";
          echo "Área del rectángulo: " . $area . "<br>";

          /**
           * Una tienda ofrece un descuento del 15% sobre el total de compra
           * y un cliente quiere saber cuanto tiene que pagar fnalmente por su compra
           * (Inventarse el valor de compra). 
           * ¿Cuanto vale sin descuento? 
           * ¿Qué descuento me ha hecho? 
           * ¿Cuanto vale finalmente el producto con el descuento?
           */
          $compra = 200;
          $descuento = $compra * 0.15;
          $totalPagar = $compra - $descuento;
  
          echo "Total de la compra: " . $compra . "€<br>";
          echo "Descuento aplicado: " . $descuento . "€<br>";
          echo "Total a pagar después del descuento: " . $totalPagar . "€<br>";

           /*
           Escribor un programa que convierta un valor dado en 
           Grados Fahrenheit a Grados Celsius
           Formula es C = (F-32)*5/9 
           */
          $gradosFahrenheit = 98.6;   
          $gradosCelsius = ($gradosFahrenheit - 32) * 5 / 9;
          echo "{$gradosFahrenheit} grados Fahrenheit son equivalentes a " . round($gradosCelsius, 2) . " grados Celsius.<br>";

           /*
           Un vendedor recibe un Sueldo base mas un 10% de comision por cada una de sus ventas.
           El vendedor desea saber cuanto va a cobrar a final de mes si ha hecho tres ventas
           Una de 1200 otra de 800 y otra 950. Sabiendo que su sueldo base es de 1500 
           */


            /*
             Escribre un programa que muestre la tabla de multiplicar de un numero
            */


    ?>
</body>
</html>
