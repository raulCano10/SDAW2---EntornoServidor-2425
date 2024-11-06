<!DOCTYPE html>

<html>
<head> 
    <title> CADENAS DE CARACTERES </title>
</head>
<body>
    <?php
        //EJERCICIO 1
        //Dada la cadena 
        //"El abecedario completo es algo largo y detallarlo exaustivamente es costoso"
        
        //1.1:Extraer la segunda,la sexta y la novena palabra de la cadena 
        // y almacenar su valor en 3 variables distintas.
        //1.2:Indicar la longitud de cada palabra extraida.
        //1.3:Indicar cuantas veces aparece la vocal "a" y la vocal "e" en la cadena "$cadena" (substring_count())

        //1.4:Mostrar la cadena sustituyendo todas las vocales "o" por el simbolo "*"
        //1.5: Mostrar la cadena eliminando todos los espacios
        //1.6: Mostrar la cadena en MAYUSCULAS
        //1.7: Mostrar la cadena en minusculas
        //1.8: Buscar la palabra "completo" en la cadena. Indicar si existe o no.
        //1.9: Buscar la palabra "rueda" en la cadena. Indicar si existe o no.
        //1.10: extraer la subcadena "es algo largo y detallarlo exaustivamente es costoso"
        //      de la cadena original.

        // a) declaramos variable cadena
        $cadena = "El abecedario completo es algo largo y detallarlo exaustivamente es costoso";

        //1.1 Extraemos segunda, sexta y novena palabra
        //$a = strpos($cadena,"abecedario");
        //$b = strlen("abecedario");
        //substr($cadena,$a,$b);
        $segundaPalabra = substr($cadena, strpos($cadena,"abecedario"), strlen("abecedario"));
        $sextaPalabra = substr($cadena, strpos($cadena,"largo"), strlen("largo"));
        $novenaPalabra = substr($cadena, strpos($cadena,"detallarlo"), strlen("detallarlo"));
        
        echo "Segunda palabra: " . $segundaPalabra . "<br>";
        echo "Sexta palabra: " . $sextaPalabra. "<br>";
        echo "Novena palabra: " . $novenaPalabra. "<br>";

        //Utilizando explode

        $delimitador = " ";
        $arrayResultado = explode($delimitador, $cadena);
        echo "<pre>";
        print_r($arrayResultado);
        echo "</pre>";

        //1.2:Indicar la longitud de cada palabra extraida.
        $longitudSegundaPalabra = strlen($segundaPalabra);
        $longitudSextaPalabra = strlen($sextaPalabra);
        $longitudNovenaPalabra = strlen($novenaPalabra);

        echo "Longitud Segunda palabra: " . $longitudSegundaPalabra . "<br>";
        echo "Longitud Sexta palabra: " . $longitudSextaPalabra. "<br>";
        echo "Longitud Novena palabra: " . $longitudNovenaPalabra. "<br>";

        //1.3:Indicar cuantas veces aparece la vocal "a" y la vocal "e" en la cadena "$cadena" (substring_count())
        $letraA_count = substr_count($cadena, 'a');
        $letraE_count = substr_count($cadena, 'e');

        echo "La letra a aparece : " . $letraA_count . " vez/veces <br>";
        echo "La letra e aparece : " . $letraE_count. " vez/veces <br>";

        //1.4:Mostrar la cadena sustituyendo todas las vocales "o" por el simbolo "*"
        $cadena_o_astericos = str_replace('o','*',$cadena);
        //1.5: Mostrar la cadena eliminando todos los espacios
        $cadena_sin_espacios = str_replace(' ','',$cadena );
        echo "Cadena con o sustituida por * : " . $cadena_o_astericos . " <br>";
        echo "Cadena sin espacios : " . $cadena_sin_espacios. " <br>";

        //1.6: Mostrar la cadena en MAYUSCULAS
        //1.7: Mostrar la cadena en minusculas
        $cadena_Mayusculas = strtoupper($cadena);
        $cadena_Minusculas = strtolower($cadena);

        echo "Cadena en MAYUSCULAS: " . $cadena_Mayusculas. " <br>";
        echo "Cadena en minusculas: " . $cadena_Minusculas. " <br>";

        //1.8: Buscar la palabra "completo" en la cadena. Indicar si existe o no.
        $existe_completo = strpos($cadena,"completo") !== false ? "Encontrado" : "No encontrado";
        //1.9: Buscar la palabra "rueda" en la cadena. Indicar si existe o no.
        $existe_rueda = strpos($cadena,"rueda") !== false ? "Encontrado" : "No encontrado";
        
        echo "¿La palabra completo existe? " . $existe_completo   . "<br>";   
        echo "¿La palabra rueda existe? " . $existe_rueda   . "<br>";
        
        //1.10: extraer la subcadena "es algo largo y detallarlo exaustivamente es costoso"
        //      de la cadena original.
        $subcadena = substr($cadena,strpos($cadena,"es algo largo y detallarlo exaustivamente es costoso"));
        echo "La subcadena extraida es: " . $subcadena   . "<br>";
        
        ?>
</body>
</html>
