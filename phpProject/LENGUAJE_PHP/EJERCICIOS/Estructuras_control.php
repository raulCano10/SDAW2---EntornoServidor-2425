<!DOCTYPE html>

<html>
<head> 
    <title> ESTRUCTURAS DE CONTROL </title>
</head>
<body>
    <?php
        //EJERCICIO 1. Dado un numero que te diga si es impar o par
        $numero = 7;                
        if ($numero % 2 == 0) {
            echo "El número $numero es par.<br>";
        } else {
            echo "El número $numero es impar.<br>";
        }

        //EJERCICIO 2. Dado un numero que diga si es Positivo, negativo o 0 (IF ELSE)
        $numero = -5;
        if ($numero > 0) {
            echo "El número $numero es positivo.<br>";
        }
        if ($numero < 0) {
            echo "El número $numero es negativo.<br>";
        }
        if ($numero == 0) {
            echo "El número es cero.<br>";
        }

        //EJERCICIO 3. Un programa donde introduzcas usuario y contraseña y si has puesto
        // Usuario = root
        // Contraseña = 3F567xSa
        //Que nos diga "Has entrado al sistema" sino "ERROR"
        $usuario = "root"; // Puedes cambiar este valor o usar un formulario para recibirlo
        $password = "3F567xSa"; // Puedes cambiar este valor o usar un formulario para recibirlo

        // Verificar las credenciales
        if ($usuario === "root" && $password === "3F567xSa") {
            echo "Has entrado al sistema.<br>";
        } else {
            echo "Error: usuario o contraseña incorrectos.<br>";
        }

        //EJERCICIO 4. Escribe un programa que pida la nota de 3 examenes, examen1, examen2, examen3
        //Cada examen tendra un peso 30%, 30% y 40%
        //Calcula la nota, muestralá por pantalla y ademas indica si está SUSPENSO, SUFICIENTE,
        // BIEN, NOTABLE o SOBRESALIENTE

        $examen1 = 6; 
        $examen2 = 7;
        $examen3 = 8;
        // % de cada examen para la nota
        $porcentajeExamen1 = 0.30;
        $porcentajeExamen2 = 0.30;
        $porcentajeExamen3 = 0.40;

        // Calcular la nota final
        $notaFinal = ($examen1 * $porcentajeExamen1) + ($examen2 * $porcentajeExamen2) + ($examen3 * $porcentajeExamen3);

        // Determinar la calificación
        if ($notaFinal < 5) {
            $calificacion = "SUSPENSO";
        } elseif ($notaFinal >= 5 && $notaFinal < 6) {
            $calificacion = "SUFICIENTE";
        } elseif ($notaFinal >= 6 && $notaFinal < 7) {
            $calificacion = "BIEN";
        } elseif ($notaFinal >= 7 && $notaFinal < 9) {
            $calificacion = "NOTABLE";
        } else {
            $calificacion = "SOBRESALIENTE";
        }

        /*
        EJERCICIO 5: Escribre un programa que muestre la tabla de multiplicar de un numero
        */
        $numero = 5; 
        $i = 1;

        echo "Tabla de multiplicar del $numero:<br>";
        //Con while
        while ($i <= 10) {
            echo "$numero x $i = " . ($numero * $i) . "<br>";
            $i++;
        }

        //Con for
        for($i = 1; $i <=10 ; $i++){
            echo "$numero x $i = " . ($numero * $i) . "<br>";
        }

        /*
        EJERCICIO 6: Escribe un programa que muestre el factorial de un numero (4! = 4*3*2*1)
        Utiliza un while o un do-while (no utilizar recursividad)
        */

    ?>
</body>
</html>
