<!DOCTYPE html>

<html>
<head> 
    <title> FECHAS </title>
</head>
<body>
    <?php
        //EJERCICIO 1. Dada la fecha actual imprimir en dsitintos formatos

        $fechaHoy = new DateTime();

        echo "Formato Y-m-d H:i:s --> ". date_format($fechaHoy,"Y-m-d H:i:s") . "<br>";
        echo "Formato d/m/Y --> ". date_format($fechaHoy,"d/m/Y") . "<br>";
        echo "Formato d/m/y --> ". date_format($fechaHoy,"d/m/y") . "<br>";
        echo "Formato l, F j, Y --> ". date_format($fechaHoy,"l, F j, Y") . "<br>";
        echo "Formato l, F j, Y --> ". date_format($fechaHoy,'d \d\e\l m \d\e Y') . "<br>";

        echo "<hr>";
        //EJERCICIO 2. Dada la fecha de tu cumpleaños, imprimirla en distintos formatos.
        $fechaCumple = new DateTime("04-10-1981 08:20:04");
        echo "Formato Y-m-d H:i:s --> ". date_format($fechaCumple,"Y-m-d H:i:s") . "<br>";
        echo "Formato d/m/Y --> ". date_format($fechaCumple,"d/m/Y") . "<br>";
        echo "Formato d/m/y --> ". date_format($fechaCumple,"d/m/y") . "<br>";
        echo "Formato l, F j, Y --> ". date_format($fechaCumple,"l, F j, Y") . "<br>";
        echo "Formato l, F j, Y --> ". date_format($fechaCumple,'d \d\e\l m \d\e Y') . "<br>";

        //EJERCICIO 3. Dada la fecha actual:
        // Imprime el dia de mañana
        // El dia dentro de 1 mes
        // El año pasado
        echo "<hr>";
        $fechaHoy -> modify("+1 day");
        echo "Mañana es " . date_format($fechaHoy,"d/m/Y") . "<br>";
        echo "Mañana es " . $fechaHoy -> format("d/m/Y") . "<br>";

        echo "<hr>";
        $fechaHoy -> modify("+1 month");
        echo "El mes que viene es " . date_format($fechaHoy,"F") . "<br>";

        echo "<hr>";
        $fechaHoy -> modify("-1 year");
        echo "El año pasado era " . date_format($fechaHoy,"Y") . "<br>";

        //EJERCICIO 4 Calcular las horas restantes desde ahora mismo 
        // hasta una hora especifica por ejemplo 17:30 de la tarde
        // y calcular la diferencia

        $tiempoActual = time();
        echo "Time Stamp Ahora -> " . $tiempoActual . "<br>";

        $time_stamp_cinco_y_media_de_hoy = strtotime("17:30");

        //Diferencia en segundos entre dos horas
        $diferencia_en_segundos = $time_stamp_cinco_y_media_de_hoy - $tiempoActual;
        $diferencia_en_horas = floor($diferencia_en_segundos/3600);
        $diferencia_en_minutos = floor($diferencia_en_segundos/60);

        echo "Diferencia en segundos: " . $diferencia_en_segundos . "<br>";
        echo "Diferencia en minutos: " . $diferencia_en_minutos . "<br>";
        echo "Diferencia en horas: " . $diferencia_en_horas . "<br>";
        
        echo "Desde ahroa mismo hasta las 17:30 de la tarde faltan {$diferencia_en_horas} horas {$diferencia_en_minutos} minutos y {$diferencia_en_segundos} <br>";
        
        //Dada una fecha calcula si es bisiesto o no
        //Un año es bisiesto si es divisible entre 4 y ademas no es divisible entre 100
        //O bien si es divisible entre 400.
        $anio = "2023";
        echo (date('L',strtotime("{$anio}-01-01"))) ? "Bisiesto" : "No bisiesto";

        $anio = "2023";
        if(
        ($anio % 4 == 0 && $anio % 100 != 0)
        ||
        ($anio % 400 == 0)
        ){
            echo "Es bisiesto <br>";
        }else{
            echo "No es bisiesto <br>";
        }

        //7. Dada la fecha de tu cumpleaños, calcular la edad.
        $fecha_nacimiento = "1990-03-12";  // Fecha de nacimiento en formato "año-mes-día"
        $fecha_nacimiento = date_create("1990-03-12");  // Crea el objeto DateTime para la fecha de nacimiento
        $fecha_actual = date_create("today");  // Crea el objeto DateTime para la fecha actual
        $diferencia = date_diff($fecha_nacimiento, $fecha_actual);  // Calcula la diferencia entre ambas fechas
        $edad = $diferencia->y;  // Obtiene los años completos de diferencia
        echo "Edad: " . $edad . " años.<br>";

        //8. Dada una fecha, validar si está dentro de un rango de años. (Utiliza la función explode()).
        $fecha = "2018-06-15"; // Fecha a validar
        $rango_inferior = 2010;
        $rango_superior = 2025;
        
        // Convertir la fecha a un array con explode
        $fecha_array = explode("-", $fecha);
        print_r($fecha_array);
        $anio = (int)$fecha_array[0]; // Extraer el año
        
        if ($anio >= $rango_inferior && $anio <= $rango_superior) {
            echo "La fecha está dentro del rango de años.";
        } else {
            echo "La fecha no está dentro del rango de años.";
        }

        //9. Dada una fecha de inicio y una fecha de fin, calcular el número de horas y minutos que hay entre una y otra. 
        $inicio = "2024-11-10 08:00:00";
        $fin = "2024-11-10 15:30:00";

        $inicio_timestamp = strtotime($inicio);
        $fin_timestamp = strtotime($fin);

        // Calcular la diferencia en segundos
        $diff_seconds = $fin_timestamp - $inicio_timestamp;

        // Convertir a horas y minutos
        $hours = floor($diff_seconds / 3600);
        $minutes = floor(($diff_seconds % 3600) / 60);

        echo "Diferencia: $hours horas y $minutes minutos.<br>";
        
        //10. Inventar mini ejercicios en los que utilices las funciones de tipo FECHA
        //Ejercicio 1: Calcular la fecha de hace 7 días
        $hace_7_dias = date("Y-m-d", strtotime("-7 days"));
        echo "Fecha de hace 7 días: " . $hace_7_dias . "<br>";
        
        //Calcular el primer día del mes siguiente
        //https://www.php.net/manual/es/datetime.formats.relative.php      
        $primer_dia_mes_siguiente = date("Y-m-01", strtotime("first day of next month"));
        echo "Primer día del mes siguiente: " . $primer_dia_mes_siguiente . "<br>";

        // Determinar si una fecha es un fin de semana
        $fecha = "2024-11-09"; // Sábado

        $dia_semana = date("N", strtotime($fecha)); // 1 = lunes, 7 = domingo

        if ($dia_semana == 6 || $dia_semana == 7) {
            echo "La fecha $fecha es un fin de semana.<br>";
        } else {
            echo "La fecha $fecha no es un fin de semana.<br>";
        }

    ?>
</body>
</html>
