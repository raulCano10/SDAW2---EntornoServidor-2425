<!DOCTYPE html>

<html>
<head> 
    <title> CADENAS DE TEXTO</title>
</head>
<body>
    <?php
        $cadena1 = "Priemera cadena de texto";
        $cadena2 = "Segunda cadena de texto introducida php";

        //concatenar cadenas
        echo $cadena1 . $cadena2. "<br>";

        $cadena3 = "Yo soy otro texto tambien";
        $cadena4 = "";

        $cadena4 .= $cadena3;
        $cadena4 .= "HOLA!!!!";
        $cadena4 .= $cadena2;

        echo $cadena4 . "<br>";
    
         $a = "VARIABLE DENTRO DE CADENA";
        echo "Podemos incluir variables en cadenas {$a} entre el texto";
        echo "<hr>";
        //Logitud de una cadena
        echo strlen($a) ."<br>";
        //Pasar a minuscula
        echo strtolower($a) ."<br>";
        //Pasar a MAYUSCULA
        
        //Extraer subcadenas de una cadena
        echo strtoupper($a) ."<br>";
        echo substr($a,9,6) ."<br>";    
        $subCadenaDeA = substr($a,9,6);

        //Busqueda y remplazo
        $d = "Esta es la comunidad de la Region de Murcia";
        echo strpos($d, "comunidad");

        $strReplaced = str_replace("comunidad","MURCIA",$d);
        echo $strReplaced;

        $d = "Esta es la comunidad de comunidad la Region comunidad de Murcia comunidad";
        $strReplaced = str_replace("comunidad","REEMPLAZADA",$d,$coun);
        echo $strReplaced . "se han reemplazado {$coun} palabras.<br>" ;
        echo "<hr>";
        //CIFRADO
        $password = "DAW2&2024";
        echo md5($password);
        echo "<hr>";    
        echo sha1($password);
        echo "<hr>";
        echo hash("md5",$password);
        echo "<hr>";
        echo hash("sha1",$password);
        echo "<hr>";
        //md5()
        //sha1()

        //Funciones para verificar diferentes tipos de datos
        // is_int(), is_numeric(), is_string(), y is_null()

        $entero = 100;
        $decimal = 123.456;
        $decimal2 = "123.456";
        $cadena = "hola";
        $valorNulo = null;

        echo "¿Esta variables es numero entero?" . (is_int($entero) ? "Si" : "No") . "<br>";
        echo "¿Esta variables es numero decimal?" . (is_numeric($decimal) ? "Si" : "No") . "<br>";
        echo "¿Esta variables es numero decimal2?" . (is_numeric($decimal2) ? "Si" : "No") . "<br>";
        echo "¿Esta variables es cadena?" . (is_string($cadena) ? "Si" : "No") . "<br>";
        echo "¿Esta variables es numero entero?" . (is_null($valorNulo) ? "Si" : "No") . "<br>";

        //empty()
        $variable1 = "";
        $variable2 = "Hola";
        $variable3 = 1234;
        $variable4 = null;

        echo "¿variable1 esta vacía?" . (empty($variable1) ? "Si":"No") . "<br>";
        echo "¿variable2 esta vacía?" . (empty($variable2) ? "Si":"No") . "<br>";
        echo "¿variable3 esta vacía?" . (empty($variable3) ? "Si":"No") . "<br>";
        echo "¿variable4 esta vacía?" . (empty($variable4) ? "Si":"No") . "<br>";

        $variable5 = 42;
        $variable6 = "Hola";

        echo "variable5 es de tipo " . gettype($variable5) . "<br>";
        echo "variable6 es de tipo " . gettype($variable6) . "<br>";
        echo "decimal2 es de tipo " . gettype($decimal2) . "<br>";
        echo "decimal es de tipo " . gettype($decimal) . "<br>";
        
        //para cambiar el tipo de una variable podemos utilizar settype()
        settype($variable5,"string") . "<br>";

        echo "La variable5 es de tipo ". gettype($variable5) . "<br>";
        echo "<hr>";
        //VALIDAR 
        $email = "raulgmail.co@m";

        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo "{$email} Es un correo electronico válido";
        }else{
            echo "Error.- {$email} No es un correo electronico válido";
        }

        //$Ip = "<h1>Holaaa</h1>";
        $Ip = "25.236.25.14";

        if(filter_var($Ip , FILTER_VALIDATE_IP)){
            echo "{$Ip } Es una IP valida";
        }else{
            echo "Error.- {$Ip } No es una IP valida";
        }

        /*
        FILTER_VALIDATE_EMAIL: Valida correos electronicos.
        FILTER_VALIDATE_URL: Valida URLs.
        FILTER_VALIDATE_IP: Valida direcciones IP

        FILTER_VALIDATE_INT: Valida numeros enteros.
        FILTER_VALIDATE_FLOAT: Valida numeros coma flotante.
        
        */

        // //Podemos "sanear variables"
        // $emailSaneado = filter_var($email, FILTER_SANITIZE_EMAIL);
        // echo "El correo {$email} ha sido saneado --> {$emailSaneado}"; 

        // $url = "https://www.ejem plo.com/prueba?name=<script>";
        // $urlSaneado = filter_var($url, FILTER_SANITIZE_URL);
        // echo "El correo {$url} ha sido saneado --> {$urlSaneado}"; 

    ?>
</body>
</html>
