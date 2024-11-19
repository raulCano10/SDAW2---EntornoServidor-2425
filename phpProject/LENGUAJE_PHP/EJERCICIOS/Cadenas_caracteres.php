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
		
		/*
    4. Dadas dos palabras en dos variables, indica si riman o no. Si coinciden las tres últimas letras 
    tiene que decir que riman. Si coinciden sólo las dos últimas tiene que decir que riman un poco y 
    si no, que no riman. Recuerda que las palabras rimarán independientemente de que se escriban 
    con mayúsculas o minúsculas (funciones substr y strcasecmp).
*/
    // Variables con las dos palabras
    $palabra1 = "canción";
    $palabra2 = "emoción";

    // Convertimos ambas palabras a minúsculas para evitar problemas con mayúsculas
    $ultima_tres_palabra1 = substr($palabra1, -3);
    $ultima_tres_palabra2 = substr($palabra2, -3);

    //  if ($ultima_tres_palabra1 === $ultima_tres_palabra2) {
    //      echo "Las palabras riman.";
    //  } 

    // Comparar las tres últimas letras
    if (strcasecmp($ultima_tres_palabra1, $ultima_tres_palabra2) === 0) {
        echo "Las palabras riman.<br>";
    } else {
        // Si no coinciden las tres últimas, probamos con las dos últimas
        $ultima_dos_palabra1 = substr($palabra1, -2);
        $ultima_dos_palabra2 = substr($palabra2, -2);

        // if (strcasecmp($ultima_dos_palabra1, $ultima_dos_palabra2) === 0) {
        //     echo "Las palabras riman un poco.";
        // } else {
        //     echo "Las palabras no riman.";
        // }

         if ($ultima_dos_palabra1 === $ultima_dos_palabra2) {
             echo "Las palabras riman un poco.<br>";
         } else {
             echo "Las palabras no riman.<br>";
         }
    }
/*
    5. Permita chequear si una variable contiene una dirección de correo válida. Una dirección de 
    correo válida debe tener presentes los caracteres ‘@’ y ‘.’ Si la dirección es válida escribe por 
    un lado el nombre de usuario y por otro el dominio de dicha dirección.
*/
        $email = "alicia.cano@gmail.com";

        if (strpos($email, '@') !== false && strpos($email, '.') !== false) {
            // Encontrar la posición de '@'
            $posicionArroba = strpos($email, '@');
        
            // Extraer el nombre de usuario y dominio usando substr()
            $usuario = substr($email, 0, $posicionArroba); // Desde el inicio hasta justo antes de '@'
            $dominio = substr($email, $posicionArroba + 1); // Desde después de '@' hasta el final
        
            echo "Dirección de correo válida.<br>";
            echo "Nombre de usuario: $usuario.<br>";
            echo "Dominio: $dominio\n";
        } else {
            echo "Dirección de correo no válida.<br>";
        }


        $email = "example@example.com";

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "El correo electrónico es válido.<br>";
        } else {
            echo "El correo electrónico no es válido.<br>";
        }

        $numero = "123";

        if (filter_var($numero, FILTER_VALIDATE_INT)) {
            echo "Es un número entero válido.<br>";
        } else {
            echo "No es un número entero válido.<br>";
        }

        $cadena = "<h1>Hola Mundo!</h1>";
        $cadenaLimpia = filter_var($cadena, FILTER_SANITIZE_STRING);
        echo $cadenaLimpia;
        /*
        FILTER_SANITIZE_STRING elimina las etiquetas HTML y otros caracteres especiales de la cadena. 
        (A partir de PHP 8.1, FILTER_SANITIZE_STRING está obsoleto).
        */

        $ip = "192.168.1.1";

        if (filter_var($ip, FILTER_VALIDATE_IP)) {
            echo "La dirección IP es válida. <br>";
        } else {
            echo "La dirección IP no es válida.<br>";
        }

        $numero = "200";

        // Validar si el número está dentro de un rango específico
        $options = [
            "options" => [
                "min_range" => 1,
                "max_range" => 100
            ]
        ];
       
        if (filter_var($numero, FILTER_VALIDATE_INT, $options)) {
            echo "El número está en el rango permitido.<br>";
        } else {
            echo "El número no está en el rango permitido.<br>";
        }    

        /*
            FILTER_VALIDATE_EMAIL: Valida correos electrónicos.
            FILTER_VALIDATE_URL: Valida URLs.
            FILTER_VALIDATE_INT: Valida números enteros.
            FILTER_VALIDATE_FLOAT: Valida números de coma flotante.
            FILTER_VALIDATE_IP: Valida direcciones IP.
            FILTER_SANITIZE_STRING: Sanitiza cadenas (obsoleto en PHP 8.1+).
            FILTER_SANITIZE_EMAIL: Sanitiza una dirección de correo electrónico.
            FILTER_SANITIZE_URL: Sanitiza una URL.
        */

        $cadena = "<h1>Hola Mundo!</h1>";
        $cadenaSanitizada = filter_var($cadena, FILTER_SANITIZE_STRING);
        echo $cadenaSanitizada . "<br>"; // Salida: "Hola Mundo!"

        $email = "usuario@@example.com";
        $emailSanitizado = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $emailSanitizado . "<br>"; // Salida: "usuario@example.com"

        $url = "https://www.exa mple.com/test?name=<script>";
        $urlSanitizada = filter_var($url, FILTER_SANITIZE_URL);
        echo $urlSanitizada. "<br>"; // Salida: "https://www.example.com/test?name="

		
        
        ?>
</body>
</html>
