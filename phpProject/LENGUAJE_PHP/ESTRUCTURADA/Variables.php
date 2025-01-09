<!DOCTYPE html>

<html>
<head> 
    <title> VARIABLES </title>
</head>
<body>
    <?php

    

        $num;
        $num_a; //permite "_"
        //$num a; //no permite espacios
        $a123;

        $saldoFinalVariableX;
        $saldo_final_variable_x;

        $SAldofinalVARIABLE;
        $SAldofinalVARiable;
    
// Disponemos de variables ya definidas en el sistema para consultarlas
// Puerto conexion servidor
echo $_SERVER["SERVER_PORT"];
//Nos per conocer el directorio raiz
echo $_SERVER["DOCUMENT_ROOT"];

// echo '<pre>';
// print_r($_SERVER); 
// echo '</pre>';

//Podemos indicar el nivel de error del codigo
error_reporting(E_USER_ERROR);

$nombre = "Raul";
$nombre = 24;
$precio = 76.9;
$resta = $a - $b;

error_reporting(E_ALL);

$n1;
$n2 = 3;
$suma = $n1 + $n2;
echo $suma;

//como puedo saber si una variable tiene valor o no
echo 'Tiene valor esta variables' . isset($n1) . '</br>';
$n1 = 2000;
echo 'Tiene valor esta variables ahora' . isset($n1). '</br>';


    ?>
</body>
</html>