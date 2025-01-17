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
        $Opiniones = [
            "Calidad del servicio" => ["Excelente" => 0, "Bueno" => 0, "Regular" => 0, "Malo" => 0],
            "Precios" => ["Barato" => 0, "Razonable" => 0, "Caro" => 0],   
        ];

        //Funcio para votar
        function votar(&$Opiniones, $tema, $respuesta){
            $temaValido = isset($Opiniones[$tema]);
            $repuestaValida = isset( $Opiniones[$tema][$respuesta]);

            if($temaValido && $repuestaValida){
                $Opiniones[$tema][$respuesta]++;
            }else{
                if(!$temaValido){
                    echo "Error Tema no válido. <br>";
                }else{
                    echo "Error Respuesta no válida <br>";
                }              
            }
        }


        votar($Opiniones,"Calidad del servicio","Excelente");
        votar($Opiniones,"Calidad del servicio","Bueno");
        votar($Opiniones,"Calidad del servicio","Bueno");
        votar($Opiniones,"Calidad del servicio","Malo");
        votar($Opiniones,"Precio","Caro");
        votar($Opiniones,"Precio","Caro");
        votar($Opiniones,"Precio","Barato");
    ?>
</body>
</html>
