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

        //Dada la fecha de tu cumpleaños calcula la edad que tienes.
        $fechaCumple2 = new DateTime("04-10-1981 08:20:04");
        $fechaCumple3 = date_create("04-10-1981");

        $fechaDeHoy = date_create("today");

        $diferenciaFechas = date_diff($fechaCumple2, $fechaDeHoy);

        $aniosEntreFechas = $diferenciaFechas -> y;

        echo "Tengo {$aniosEntreFechas} años. <br>";

        //Dada una fecha 2020-05-10 validar si esta dentro de un rango de fechas
        // Por ejemplo entre 2000 y 2024. utiliza la funcion explode()

        $fechaCadena = "2020-05-10";
        $fechaCadena = "05-10-2025";
        $rangoInferior = 2020;
        $rangoSuperior = 2024;

        // $rangoInferior = "2020";
        // $rangoSuperior = "2024";

        $fecha_array = explode("-", $fechaCadena);
        
        if((int)$fecha_array[0] >= $rangoInferior && (int)$fecha_array[0] <= $rangoSuperior){
            echo "La fecha está dentro del rango de años <br>";
        }else{
            echo "La fecha está fuera del rango de años <br>";
        }

        
    
        $saludo = "Hola te estoy saludando y quiero que me trocees con un separador de espacios";
        $saludo_array = explode(" ", $fechaCadena);

        //Dada una fecha de inicio y una fecha de fin
        //"2024-11-10 08:00:00" y "2024-11-10 15:30:00"
        //Calcular el numero de horas y minutos entre una y otra
        $fechaInicio = "2024-11-10 08:00:00";
        $fechaFin = "2024-11-10 15:30:00";

        $fechaInicio_timestamp = strtotime($fechaInicio);
        $fechaFin_timestamp = strtotime($fechaFin);

        //Convertimos a horas y minutos
        $diferenciaFinInicio = $fechaFin_timestamp - $fechaInicio_timestamp;

        $horas = $diferenciaFinInicio / 3600;
        $minutos = $diferenciaFinInicio / 60;

        echo "Diferencia de hora fin y hora incio son {$horas} horas y {$minutos} minutos. <br>";

        //Calcular la fecha de hace 7 dias. Utilizar la funcion date()      
        $fechaHace7Dias = date("Y-m-d",strtotime("-7 days"));       
        echo "Hace siete dias la fecha era: " . $fechaHace7Dias . "<br>";
       
        //Calcular el primer dia del mes siguiente. Utilizar la funcion date() 
        $primerDiaMesSiguiente = date("Y-m-d",strtotime("first day of next month"));       
        echo "Primer dia del mes siguiente: " . $primerDiaMesSiguiente . "<br>";

        //Determinar si una fecha cae en fin de semana. Utilizar la funcion date()
        $fechaCualquiera = "2024-07-21";

        ;
        $dia_de_la_semana = date("l",strtotime($fechaCualquiera));
        if(in_array(strtolower($dia_de_la_semana), ["saturday", "sunday"])){
            echo "El dia {$fechaCualquiera} cae en fin de semana <br>";
        }else{
            echo "El dia {$fechaCualquiera} NO cae en fin de semana <br>";
        }

        $dia_de_la_semana = date("N",strtotime($fechaCualquiera));
        if($dia_de_la_semana == 6 || $dia_de_la_semana == 7){
            echo "El dia {$fechaCualquiera} cae en fin de semana <br>";
        }else{
            echo "El dia {$fechaCualquiera} NO cae en fin de semana <br>";
        }

    ?>
</body>
</html>
