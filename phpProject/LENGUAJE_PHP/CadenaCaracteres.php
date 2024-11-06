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
        
        //md5()
        //sha1()


    ?>
</body>
</html>
