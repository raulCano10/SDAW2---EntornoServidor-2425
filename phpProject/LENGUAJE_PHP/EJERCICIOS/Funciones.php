<!DOCTYPE html>

<html>
<head> 
    <title> FUNCIONES </title>
</head>
<body>
    <?php
       //Contruye una funcion ValidarPalindromo
       //donde le pases por parametro una palabra
       //y te diga si es o no un palindromo.


       //Implementa una funcion recursiva que genere la secuencia de Fibonacci
       //hasta un numero determinado de terminos.
       //Se pide la secuencia para 7 terminos de la funcion:
       // F(n)
     
       // 1. F(0) = 0
       // 2. F(1) = 1
       // 3. F(n-1) + F(n-2) para n>1

       //Imprimir la secuencia completa para los primeros 7 terminos

       $n = 7;
       for($i = 0; $i<$n; $i++){
            $resultado = F($i);
            echo " " . $resultado;
       }

       function F($n){
            if($n == 0){
                return 0;
            }else if($n == 1){
                return 1;
            }else{
                return F($n-1) + F($n-2);
            }
       }



    ?>
</body>
</html>
