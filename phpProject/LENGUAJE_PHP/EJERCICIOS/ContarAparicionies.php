<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "<h3>Dado el array \$nombres = [\"Pepe\",\"Pepe\",\"Alicia\",\"Juan\"];<h3>";
        echo "<h3><br>Crea una funcion llamada contar_apariciones que cuente cuantas veces se repite cada valor
        y devuelva un array asociativo como el siguiente            <h3>";
        function contar_apariciones($lista){
            //Usando bucle anidado
            $apariciones=0;
            foreach($lista as $valor){
                
                for ($i=0; $i < count($lista); $i=$i+1){
                    if ($valor == $lista[$i]){
                        $apariciones++;
                    }
                }    
                $resultado[$valor]=$apariciones;
                $apariciones=0;
            }
            return $resultado;
        
            //Otra forma para evitar bucle anidado
            //Para buscar aparciones, uso función
            // $resultado=[];
            // foreach ($nombres as $valor){
            //     $apariciones = count(array_keys($nombres,$valor));
            //     //print "El $valor tiene $apariciones <br>";
            //     $resultado[$valor]=$apariciones;
            // }
            
        }
        
        
        $nombres = ["Pepe","Pepe","Alicia","Juan"];
        $resultado=contar_apariciones($nombres);
        //echo "<h3>Array original</h3>";
        //print '<pre>';print_r($nombres);print'</pre>';
        
        print "<h3>Array con las apariciones</h3>";
        print '<pre>';print_r($resultado);print'</pre>';

        ?>
    </body>
</html>
