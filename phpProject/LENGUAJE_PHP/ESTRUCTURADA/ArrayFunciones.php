<!DOCTYPE html>

<html>
<head> 
    <title> ARRAYS FUNCIONES </title>
</head>
<body>
    <?php
      include ("Array.php");
      //require ("Array.php");

      //Cada array tiene un puntero interno
      //El sistema tiene una serie funcines predefinidas para trabajar con ese puntero interno

      //current(array) --> Devuelve el VALOR del puntero ACTUAL interno del array. Si no hay valor devuelve FALSE
      //key(array) --> Devuelve la CLAVE a la que apunta el puntero interno. Devuelve NULL si el puntero interno está fuera de los limites.
      //next(array) --> MUEVE el puntero a la siguiente posicion del array y DEVUELVE su VALOR. Si no hay valor te devuelve FALSE. Tambien devuelve FALSE si es el ultimo.
      //prev(array) --> MUEVE el puntero a la posicion anterior del array y DEVUELVE su VALOR. Si no hay valor devuelve FALSE. Tambien devuelve FALSE si es el primero.
      //reset(array) --> Coloca el puntero en el primer elemento del array y devuelve su valor. Si no hay valor te devuelve FALSE.
      //end(array) --> Cola el puntero en el ultimo elemento del array y devuelve su valor. Si no hay valor te devuelve FALSE.

      //ksort($array1, FLAG): Funcion ordenar por clave 
      //array_merge($array1, $array2) Funcion de mergeo(Mezcla) de array
      //print_r($array1) Imprime el array recursivamente.
      //array_key_exists(key, array) Me indica si eiste la clave dentro del array
      //is_array($array1) Me incica si es un array o no esa variable true o vacio(false)
      //unset($array["clave"]) Borra el elemento del array

      //array_value($array1) Devuelve otro array igual que $array1 pero con claves numericas.
      
      $ciudades = array("MU" => "Murcia", "ST" => "Santander", "VL" => "Valencia");
  
      while(current($ciudades)){
        echo "" . current($ciudades) ."<br>";
        next($ciudades);
      }

      echo "<hr>";
      echo "NEXT despues de recorrer todo el array: ". next($ciudades). "<br>";
      echo "<hr>";

      reset($ciudades);
      echo "" . current($ciudades) ."<br>";
      echo "<hr>";

      end($ciudades);
      echo "" . current($ciudades) ."<br>";
      echo "<hr>";

      while(current($ciudades)){
        echo "". current($ciudades) ."<br>";
        prev($ciudades);
      }

      //Funciones básicas
      echo "<hr>";
      $numElementos = count($ciudades);
      echo "". $numElementos ."<br>";

      echo "<pre>";
      print_r($ciudades);
      echo "</pre>";

      echo "<hr>";
      $numero = 1;
      echo "Eres un array? --> ". is_array($ciudades)."<br>";
      echo "Eres un array? --> ". is_array($numero)."<br>";
      echo "<hr>";
      //Combinar arrays
      $a = array("uno" => "Pedro", "dos" => "Antonio", "tres" => "Santiago");
      $b = array("dos" => "Carmen", "tres" => "Antonio", "cuatro" => "Santiago");

      $c = array_merge($a, $b);

      echo "<pre>";
      print_r($c);
      echo "</pre>";

      //Borrar un elemento
      unset($c["tres"]);
      echo "<pre>";
      print_r($c);
      echo "</pre>";

      //Dado un array $b podemos crear un nuevo array pero con las claves ordenadas numericamente

      $nuevoArrayC = array_values($c);
      echo "<pre>";
      print_r($nuevoArrayC);
      echo "</pre>";

      echo "<pre>";
      print_r($equipo);
      echo "</pre>";

      //Ksort Ordena un array ascendente
      ksort($equipo,SORT_REGULAR);
      echo "<pre>";
      print_r($equipo);
      echo "</pre>";

    ?>
</body>
</html>
