<!DOCTYPE html>

<html>
<head> 
    <title> FUNCIONES </title>
</head>
<body>
    <?php
        //HAY FUNCIONES QUE YA EXISTEN
        echo rand(1,10). "<br>";

        //FUNCIONES DECLARADAS POR EL DESARROLLADOR
        function doble($valor){
            echo 2*$valor."<br>";
        }

        doble(30);

        
        function doble2($valor){
            return 2*$valor;
        }
        echo doble2(8);

        function negrita($valor){
            echo "<b>".$valor."</b>";
        }

        negrita("Escribe esto en negrita");
echo "<hr>";
        //VARIABLES LOCALES
        $h = 30;
        function f1(){
            $h = 9;
        }
        
        echo f1(). $h."</b>"."<br>";
        echo "<hr>";
        //VARIABLES GLOBALES
        function encadenar($numero, $caracter){            
            $texto = "";
            $texto .= str_repeat($caracter,$numero);
            echo $texto."<br>";
        }
        
        encadenar(3, "A");
        encadenar(5, "B");
        encadenar(7, "C");
        echo "<hr>";
        function encadenar2($numero, $caracter){            
            global $texto;
            $texto .= str_repeat($caracter,$numero);
            echo $texto."<br>";
        }
        
        encadenar2(3, "A");
        encadenar2(5, "B");
        encadenar2(7, "C");
        //VARIABLES ESTATICAS
        function encadenar3($numero, $caracter){            
            static $texto;
            $texto .= str_repeat($caracter,$numero);
            echo $texto."<br>";
        }
        
        encadenar3(3, "A");
        encadenar3(5, "B");
        encadenar3(7, "C");
        echo "<hr>";
        function variableStatica(){
            static $cuenta = 0;
            $cuenta++;
            echo "Esta es la {$cuenta} vez que me ha llamado";
        }

        variableStatica();
        echo "<hr>";
        variableStatica();
        echo "<hr>";
        variableStatica();
        echo "<hr>";
        variableStatica();
        echo "<hr>";
        variableStatica();
        echo "<hr>";
        variableStatica();
        echo "<hr>";
        variableStatica();
        echo "<hr>";

        //PASO PARAMETROS POR VALOR
        function f2($x){
            $x = 10;
        }

        $x = 6;
        f2($x);
        echo $x."<br>";

        //PASO PARAMETROS POR REFERENCIA
        function f3(&$pepito){
            $pepito = 10;
        }
        echo "<hr>";
        $x = 6;
        f3($x);
        echo $x."<br>";

        //Podemos pasar varios parametros 
        //unos por valor 
        //y otros por referencia

        function f4($NO_ref, &$ref){
            $NO_ref = 9;
            $ref++;
        }

        $x = 7;
        $y = 0;
        echo $x."<br>";
        echo $y."<br>";
        f4($x,$y);
        echo $x."<br>";
        echo $y."<br>";
        f4($x,$y);
        f4($x,$y);
        f4($x,$y);
        f4($x,$y);
        f4($x,$y);
        f4($x,$y);
        f4($x,$y);
        f4($x,$y);
        echo $x."<br>";
        echo $y."<br>";

        echo "<hr>";
        //RECURSIVIDAD
        function factorial($n){
            if($n == 0){
                return 1;
            }
            return $n * factorial($n - 1);
        }

        $num = 5;
        $resultado = factorial($num);
        echo "El Factorial de {$num} es: {$resultado}";

    ?>
</body>
</html>
