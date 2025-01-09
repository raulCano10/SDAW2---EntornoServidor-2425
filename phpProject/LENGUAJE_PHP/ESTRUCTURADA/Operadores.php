<!DOCTYPE html>

<html>
<head> 
    <title> OPERADORES </title>
</head>
<body>
    <?php
        //1. ARITMETICOS
        //+, -, *, /, %  
        $x=15.5;
        $y = 2;
        echo "La suma es" . $x+$y . "<br>";
        echo "La resta es" . $x-$y . "<br>";
        echo "La multiplicacion es" . $x*$y . "<br>";
        echo "La división es" . $x/$y . "<br>";
        echo "El resto es " . $x%$y  . "<br>";

        echo "<hr>";
        //2. CONDICIONALES
        // <, > , <=, >=, !=, !, &&, ||, OR , XOR, ==, ===, AND
        $edad = 10;
        $esMayorEdad = $edad >= 18;
        $esMenorEdad = !$esMayorEdad;
        echo "Es mayor de edad? --> " . $esMayorEdad. "<br>";
        echo "Es menor de edad? --> " . $esMenorEdad. "<br>";
        echo "<hr>";

        $carnetConducir = false;
        $edad = 30;
        $puedoConducir = $carnetConducir && ($edad >= 18);
        echo "Puedo conducir? " . $puedoConducir. "<br>";
    
        $resultadoPrimero = 18 == 18.0;
        $resultadoSegundo = 18 === 18.0;
        echo "<hr>";
        $llueve = true;
        $nieva = true;
        $graniza = false;
        $malTiempo = $llueve || $nieva || $graniza;
        echo "malTiempo -->> " . $malTiempo."<br>";

        echo "<hr>";
        echo "resultadoPrimero -->> " . $resultadoPrimero."<br>";
        echo "resultadoSegundo -->> " . $resultadoSegundo."<br>";
        echo "<hr>";
        //3. ASIGNACION
        // +=, -=, *=, /=
        $cont = 1;
        $cont = $cont + 1;
        $cont++;
        $cont = $cont - 1;
        $cont--;

        $x = 1;

        $z = $x++;
        echo $z;
        echo $x;

        //z = 1 y x=2
        $z = ++$x;
        echo $z;
        echo $x. "<br>";

        //4. BIT
        //&, |, ~, XOR, >>, <<
        $a = 6;
        $b = 3;

        $resultadoAND = $a & $b;
        $resultadoOR = $a | $b;
        $resultadoXOR = $a ^ $b;

        //AND       
        echo "6 & 3 = " . $resultadoAND. "<br>";
        //OR
        echo "6 | 3 = " . $resultadoOR. "<br>";
        //XOR
        echo "6 ^ 3 = " . $resultadoXOR. "<br>";

        echo $resultadoAND >> 1 . "<br>";
    ?>
</body>
</html>
