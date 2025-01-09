<!DOCTYPE html>

<html>
<head> 
    <title> ESTRUCTURAS DE CONTROL </title>
</head>
<body>
    <?php
       //IF
       $nota = 6;
       $aprobado = 0;
       $suspenso = 0;

       if($nota >= 5){
        echo "Aprobado <br>";
       }

       if($nota > 5):
        echo "Aprobado <br>";
       endif;

       //IF - ELSE
       if($nota >= 5){
        echo "Aprobado <br>";
       }else{
        echo "Suspenso <br>";
       }

       //IF - ELSE - ANIDADO
        if($nota >= 5){
            echo "Aprobado <br>";
        }elseif ($nota > 0 && $nota < 5){
            echo "Suspenso <br>";
        }else{
            echo "Suspenso Muy deficiente. Hablar con dirección.<br>";
        }

        //SWITCH
        switch($nota){
            
            case 1: 
            case 2:
            case 3: 
            case 4:          
                echo "Suspenso <br>";
                break;
            case 5:    
            case 6:
            case 7: 
            case 8: 
            case 9:
            case 10:
                echo "Aprobado <br>";
                break;
            default: 
                echo "Suspenso Muy deficiente. Hablar con dirección.<br>";
                break;
        }

        //WHILE
        $i=0;
        while($i<=10){
            echo $i++. "<br>";   
        }
        while(true){            
            break;
        }

        echo "<hr>";
        //DO - WHILE
        do{
            //Este bloque se va a ejecutar ALMENOS 1 vez
            echo $i++. "<br>"; 
        }while($i<=10);
        $i = 20;
        // FOR
        for($i= 0; $i<= 10; $i++){
            echo $i."<br>";
        }

        //BREAK
        $i = 1;
        while($i<=10){
            echo $i++."<br>";
            if($i == 5){
                break;
            }
        }

        //CONTINUE
        $i = 1;
        while($i<=10){
            echo $i++."<br>";
            if($i == 5){
                continue;
            }
            echo $i. " <br>";
        }
    ?>
</body>
</html>
