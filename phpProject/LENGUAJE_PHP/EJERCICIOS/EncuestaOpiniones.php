<!DOCTYPE html>

<html>
<head> 
    <title> ENCUESTA </title>
</head>
<body>
    <?php
         /*
       
        Crea un sistema de encuesta que recopile opiniones de los usuarios sobre diferentes temas 
	        y almacene los resultados en un array asociativo 
        
        1. Define un array asociativo multidimensional llamado opiniones que tenga temas como claves 
	        y un sub-array con las respuestas posibles como claves y el número de votos como valores.
       
        opiniones 
            Calidad del servicio 
	    	    Excelente - 0, 
	    	    Bueno - 0 
	    	    Regular - 0 
                Malo - 0
            Precio 
		        Barato 0
		        Razonable 0
		        Caro 0
                
        1. Crea una función votar que reciba el tema y la respuesta seleccionada, 
	        y actualice el número de votos en el array. Usa estructuras de control para verificar que el tema 
            y la respuesta sean válidos.
        2. Escribe otra función mostrarResultados que muestre cada tema con sus respuestas y el número de votos.
        3. Usa estructuras de control para destacar el tema con más votos en cualquier respuesta y el que 
        tenga menos participación.
        */
         $opiniones = [
            "Calidad del servicio" => ["Excelente" => 0, "Bueno" => 0, "Regular" => 0, "Malo" => 0],
            "Precio" => ["Barato" => 0, "Razonable" => 0, "Caro" => 0]
        ];

        // Función para votar en la encuesta
        function votar(&$opiniones, $tema, $respuesta) {
            if (isset($opiniones[$tema]) && isset($opiniones[$tema][$respuesta])) {
                $opiniones[$tema][$respuesta]++;
                echo "Voto registrado para \"$respuesta\" en el tema \"$tema\".<br>";
            } else {
                echo "Error: Tema o respuesta no válidos.<br>";
            }
        }

        // Función para mostrar los resultados de la encuesta
        function mostrarResultados($opiniones) {
            echo "<h3>Resultados de la Encuesta:</h3>";
            $temaMasVotado = "";
            $maxVotos = -1;
            $temaMenosVotado = "";
            $minVotos = PHP_INT_MAX;

            foreach ($opiniones as $tema => $respuestas) {
                echo "<h4>$tema</h4>";
                $totalVotosTema = 0;

                foreach ($respuestas as $respuesta => $votos) {
                    echo "$respuesta: $votos votos<br>";
                    $totalVotosTema += $votos;
                }

                if ($totalVotosTema > $maxVotos) {
                    $maxVotos = $totalVotosTema;
                    $temaMasVotado = $tema;
                }

                if ($totalVotosTema < $minVotos) {
                    $minVotos = $totalVotosTema;
                    $temaMenosVotado = $tema;
                }
            }

            echo "<br>El tema con más votos es: \"$temaMasVotado\" con $maxVotos votos.<br>";
            echo "El tema con menos participación es: \"$temaMenosVotado\" con $minVotos votos.<br>";
        }

        // Pruebas de la encuesta
        votar($opiniones, "Calidad del servicio", "Excelente");
        votar($opiniones, "Precio", "Razonable");
        votar($opiniones, "Calidad del servicio", "Bueno");
        votar($opiniones, "Precio", "Caro");
        votar($opiniones, "Calidad del servicio", "Regular");
        mostrarResultados($opiniones);
    ?>
</body>
</html>
