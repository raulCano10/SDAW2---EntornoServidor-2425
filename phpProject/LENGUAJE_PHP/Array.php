<!DOCTYPE html>

<html>
<head> 
    <title> ARRAYS </title>
</head>
<body>
    <?php

    #region 1. ARRAYS NUMERICOS

    //Declaracion de arrays numericos
    $provincias = array("Almeria","Murcia","Granada","Albacete");
    $provincias2 = ["Almeria","Murcia","Granada","Albacete"];

    $provincias[2] = "Madrid";

    $provincias[4] = "Barcelona";
    $provincias[] = "Alicante";

    //RECORRER UN ARRAY
    foreach($provincias as $NombreProvincia){
        echo $NombreProvincia . "<br>";
    }


    #endregion

    #region 2. ARRAYS ASOCIATIVOS
    $nombres = array(0 => "Carmen", 1 => "Pedro", 2 => "Pablo");
    $ciudades = array("MU" => "Murcia", "MA" => "Madrid", "ST" => "Santander");
    echo "<hr>";
    foreach($nombres as $clave => $valor)
    {
        echo "En la clave ". $clave ." esta el valor ". $valor ."<br>";
    }
    echo "<hr>";
    foreach($ciudades as $clave => $valor)
    {
        echo "En la clave ". $clave ." esta el valor ". $valor ."<br>";
    }

    $ciudades["JA"] = "Jaen";
    $ciudades["MU"] = "GALICIA";
    echo "<hr>";
    foreach($ciudades as $clave => $valor)
    {
        echo "En la clave ". $clave ." esta el valor ". $valor ."<br>";
    }
    
    #endregion

    #region 3. ARRAYS MULTIDIMENSIONALES
    $equipo = array(
                     "RM" => array("9" => "MBappe", "5" => "Bellingham", "10" => "Modric"),
                     "FCB"=> array("5" => "Lamine", "11"=> "Raphinha", "8" => "Pedri"),
                     "ATM"=> array("6" => "Koke", "5" => "De Paul", "13" => "Oblak"),

    );
    
    echo "<hr>";
    foreach($equipo as $clave => $valor){
        echo $clave . " " . $valor["5"]. "<br>";
    }

    foreach($equipo as $codEquipo => $Jugadores){
        echo "" . $codEquipo ."<br>";
        foreach($Jugadores as $clave => $valor){
            echo "El Dorsal numero ". $clave ." es ". $valor ."<br>";
        }
    }
    echo "<hr>";
    foreach($equipo as $codEquipo => $Jugadores){
        echo "" . $codEquipo ."<br>";
        print_r($Jugadores);
        echo "<br>";
    }
    echo "<hr>";
    echo "<pre>";
    print_r($equipo);
    echo "</pre>";
    #endregion

    #region 4. ARRAYS SYSTEMA
    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";

    #endregion

    #region 5. ACLARACIONES

    //1. No es necesario que indiques el tamaño del array.
    //2. No es necesario que indiques el valor de la clave.
    //3. Sus elementos no tienen que ser del mismo tipo.

    $arrayPrueba = [];
    $arrayPrueba[] = 18;

    $valor = [];
    $valor[] = "Hola";
    $valor[] = 20;
    $valor[] = true;
    $valor[] = 3.4;

    $nota = array("Antonio" => 5, 5 => 6, 4, "Luis" => 3.6);

    foreach ($nota as $key => $value) {
        echo "La nota ". $key . " es " . $value . "<br>";
    }

    #endregion

    ?>
</body>
</html>