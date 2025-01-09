<!DOCTYPE html>

<html>
<head> 
    <title> FECHAS </title>
</head>
<body>
    <?php
        // Valor numerico que nos indica la fecha y la hora TIMESTAMP
        // Te indica el tiempo en segundos desde 1 de enero de 1970
       $timeAhora = time();
       echo "time() " . "". $timeAhora ."<br>";

       //Como creamos una fecha concreta manualmente
       $fechaManualAhora = mktime(15,30,25,04,10,1981);
       echo "mktime() " . "". $fechaManualAhora ."<br>";

       //Funcion Date recoger fecha de un timestamp y le puedo dar formato
       //https://www.php.net/manual/es/function.date.php
       $fechaActual = Date("d/m/Y",$fechaManualAhora);
       echo "fechaActual() en formato d/m/y " . "". $fechaActual ."<br>";
       $year = Date("Y",$fechaManualAhora);
       $mes = Date("m",$fechaManualAhora);
       $dia = Date("d",$fechaManualAhora);
       echo "fechaActual() AÑO Y " . "". $year ."<br>";
       echo "fechaActual() MES m " . "". $mes ."<br>";
       echo "fechaActual() DIA d " . "". $dia ."<br>";

       $hora = Date("H",$fechaManualAhora);
       $minutos = Date("i",$fechaManualAhora);
       $segundos = Date("s",$fechaManualAhora);
       echo "fechaActual() hora h " . "". $hora ."<br>";
       echo "fechaActual() minutos i " . "". $minutos ."<br>";
       echo "fechaActual() segundos s " . "". $segundos ."<br>";

       //Fecha sin indicar el Time
       $fechaSinIndicarElTime = Date("d/m/Y");
       echo "fechaActualSin Indicar el time() en formato d/m/y " . "". $fechaSinIndicarElTime ."<br>";

       //Crear fecha concreta en el tiempo y despues darle formato con date_format();
       $fechaCumpleanios = new DateTime("25-10-2000");
       $fechaCumpleañosFormateada = date_format($fechaCumpleanios,"d/m/Y");
       echo "fechaCumpleañosFormateada d/m/y " . "". $fechaCumpleañosFormateada ."<br>";

       $fechaCumpleanios2 = new DateTime("04-10-1987");
       $fechaCumpleañosFormateada2 = $fechaCumpleanios2 -> format("d/m/Y");
       echo "fechaCumpleañosFormateada2 d/m/y " . "". $fechaCumpleañosFormateada2 ."<br>";

       $Ahora = new DateTime();
       echo $Ahora -> format('d \d\e\l m \d\e Y');

       echo "<hr>";
       //Diferencias entre fechas
       $datetime1 = new DateTime('2009-10-11');
       $datetime2 = new DateTime('2009-10-13');
       
       $intervalo = $datetime1 -> diff($datetime2);    
       echo ''. $intervalo->format('%R%a dias') .'<br>';

       $intervalo = $datetime2 -> diff($datetime1);
       echo ''. $intervalo->format('%R%a dias') .'<br>';
       echo "<hr>";
       $date1 = new DateTime('now');
       $date2 = new DateTime('tomorrow');

       var_dump($date1 == $date2);
       echo "<hr>";
       var_dump($date1 < $date2);
       echo "<hr>";
       var_dump($date1 > $date2);
       
       $dateIntervalo = date_diff($date1, $date2);  
        echo "". $dateIntervalo->format('%R%i minutos') ."<br>";
        echo "<hr>";

        //Convertir una fecha a timestamp
        $timetampOriginal = strtotime("2024-10-27");
        echo "Tiemstamp fecha original ". $timetampOriginal. "<br>";      

        //sumar 1 dia al timestamp
        $timetampOriginalMas1dia = strtotime("+1 day",$timetampOriginal);
        echo "Tiemstamp fecha original ". $timetampOriginalMas1dia. "<br>";

        //modify para modificar fechas
        $date1-> modify('+2 days');
        echo "Tiemstamp fecha original ". $date1->format("d/m/Y") . "<br>";
        /*
        Dias: +2 days
        Mese: +1 month, +3 months
        Años: +3 years
        Hora: -3 hours
        Minutos: +45 minutes, -22 minutes
        Segundos: 30 seconds, -19 seconds
        Puede hcombinar varias. +1 days +2 months
        */

        $hoy = getdate();
        echo "<pre>";
        print_r($hoy);
        echo "</pre>";
        echo $hoy["weekday"];

        echo "<br>";
        $locale = 'es_ES.UTF-8';
        $fmt = new IntlDateFormatter($locale,IntlDateFormatter::LONG, IntlDateFormatter::NONE);

        $date = new DateTime('2024-11-10');
        echo "LOCALE en_Us.UTF-8 " .$fmt->format($date);
        echo "<br>";
        $locale2 = 'en_Us.UTF-8';
        $fmt2 = new IntlDateFormatter($locale2,IntlDateFormatter::LONG, IntlDateFormatter::NONE);

        $date = new DateTime('2024-11-10');
        echo "LOCALE en_Us.UTF-8 " . $fmt2->format($date);

    ?>
</body>
</html>
