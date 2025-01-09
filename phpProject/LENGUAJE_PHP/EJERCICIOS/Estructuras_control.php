<!DOCTYPE html>

<html>
<head> 
    <title> ESTRUCTURAS DE CONTROL </title>
</head>
<body>
    <?php
        //EJERCICIO 1. Dado un numero que te diga si es impar o par

        //EJERCICIO 2. Dado un numero que diga si es Positivo, negativo o 0 (IF ELSE)
        //EJERCICIO 3. Un programa donde introduzcas usuario y contraseña y si has puesto
        // Usuario = root
        // Contraseña = 3F567xSa
        //Que nos diga "Has entrado al sistema" sino "ERROR"
        //JERCICIO 4E. Escribe un programa que pida la nota de 3 examenes, examen1, examen2, examen3
        //Cada examen tendra un peso 30%, 30% y 40%
        //Calcula la nota, muestralá por pantalla y ademas indica si está SUSPENSO, SUFICIENTE,
        // BIEN, NOTABLE o SOBRESALIENTE

        /*
        EJERCICIO 5: Escribre un programa que muestre la tabla de multiplicar de un numero
        */

        /*
        EJERCICIO 6: Escribe un programa que muestre el factorial de un numero (4! = 4*3*2*1)
        Utiliza un while o un do-while
        */
        //WHILE

        $numero = 5;
        $resultado = 1;
        $cont = $numero;

        while($cont > 1){
            $resultado *= $cont;
            $cont--;
        }
        echo "El factorial de {$numero} es {$resultado} <br>";


        $numero = 5;
        $resultado = 1;
        //FOR
        for($i = 1; $i <= $numero; $i++){
            $resultado *= $i;
        }

        echo "El factorial de {$numero} es {$resultado}<br>";
    ?>
</body>
</html>
