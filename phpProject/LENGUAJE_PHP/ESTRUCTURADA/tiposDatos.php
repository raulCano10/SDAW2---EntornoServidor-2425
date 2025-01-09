<!DOCTYPE html>

<html>
<head> 
    <title> TIPO DATOS </title>
</head>
<body>
    <?php
        //Enteros
        $entero = 23;
        //Flotantes
        $flotante = 2.3;
        $flotante2 = 12.3e-4;
        //booleanos
        $esMayorEdad = false;
        //Cadenas texto
        $cadena1 = 'Cadena con comilla simple';
        $cadena2 = "Cadena con comilla dobles";
        $cadena3 = "Mi compañero me dijo \"Hola\" ayer";
        $cadena4 = 'Mi compañero me dijo "Hola" ayer';

        echo $entero . "<br>";
        echo $flotante . "<br>";
        echo $flotante2 . "<br>";
        echo $esMayorEdad . "<br>";
        echo $cadena1 . "<br>";
        echo $cadena2 . "<br>";
        echo $cadena3 . "<br>";
        echo $cadena4 . "<br>";
        

        //OCTAL
        $octal = 071;
        echo $octal . "<br>";

        //HEXADECIMAL
        $exadecimal = 0x12ABC;
        echo $exadecimal . "<br>";

        //CONVERSIONES
        $x=2.5;
        $y=4;
        $z = $x * $y;
        echo $z . "<br>";

        //CONVERSIONES
        $x=2.5;
        $y=4;
        $z = (int)$x * $y;
        echo $z . "<br>";

        //Referencia
        $nombre = "Antonio";
        $ref = &$nombre;
        echo $nombre . "<br>";
        echo $ref . "<br>"; 


        $ref = "Carmen";
        echo $nombre . "<br>";
        echo $ref . "<br>"; 

        //CONSTANTES
        //define("PI",3.1416);
        const PI = 3.1416;
        echo PI;

        

        //OPERADDORES CONDICIONALES
        

    ?>
</body>
</html>