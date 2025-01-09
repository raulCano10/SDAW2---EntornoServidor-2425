<?php

echo "<pre>";
echo "<br> ------- POR GET ------- <br>";
print_r($_GET);
echo "</pre>";

echo "<pre>";
echo "<br> ------- POR POST ------- <br>";
print_r(value: $_POST);
echo "</pre>";

if($_POST){
    echo "<hr>";
    if(isset($_POST["nombre"])){
        $nombreGet = $_POST["nombre"];
        echo "<br>Nombre:" . $nombreGet;
    }
}else{
    echo "POST VACÍO";
}

if($_GET){
    echo "<hr>";
    if(isset($_GET["nombre"])){
        $nombreGet = $_GET["nombre"];
        echo "<br>Nombre:" . $nombreGet;
    }
    
}else{
    echo "<br>GET VACÍO<br>";
}




?>