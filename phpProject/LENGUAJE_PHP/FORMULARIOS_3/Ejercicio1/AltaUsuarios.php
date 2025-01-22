<?php

require "Funciones.php";

$errores = [];
$nombre = $apellidos = $password = $telefono = $email = $comentario = $ordenador = $provincia = "";
$aficiones = [];

if($_POST){
//Control de errores (Validaciones)
 echo"<pre>";
 print_r($_POST);
 echo"</pre>";

//Validacion nombre
if(!isset($_POST['nombre']) || empty($_POST['nombre'])){
    $errores['nombre'] = "El nombre es obligatorio";
}else{
    $nombre = trim($_POST['nombre']);
}
//validar apellidos
if(!isset($_POST['apellidos']) || empty($_POST['apellidos'])){
    $errores['apellidos'] = "Los apellidos son obligatorio";
}else{
    $apellidos = trim($_POST['apellidos']);
}
//validar apellidos
if(!isset($_POST['password']) || empty($_POST['password'])){
    $errores['password'] = "La contraseña es obligatoria";
}else{
    $password = trim($_POST['password']);
}

//validar apellidos
if(!isset($_POST['telefono']) || empty($_POST['telefono'])){
    $errores['telefono'] = "El telefono es obligatorio";
}elseif(!preg_match('/^[0-9]{9}$/',$_POST['telefono'])){
    $errores['telefono'] = "El telefono debe ser de 9 digitos";
}
else{
    $telefono = trim($_POST['telefono']);
}

//validar apellidos
if(!isset($_POST['email']) || empty($_POST['email'])){
    $errores['email'] = "El email es obligatorio";
}else{
    $email = $_POST['email'];
}

$comentario = trim($_POST['comentario']);

if(!isset($_POST['ordenador'])){
    $errores['ordenador'] = "Es obligatorio seleccionar si tiene ordenador o no";
}else{
    $ordenador = $_POST['ordenador'];
}

if(isset($_POST['aficiones']) && !empty($_POST['aficiones'])){
    $aficiones = $_POST['aficiones'];
}else{
    $errores['aficiones'] = "Seleccione alguna afición";
}

if(isset($_POST['provincia']) && !empty($_POST['provincia'])){
    $provincia = $_POST['provincia'];
}else{
    $errores['provincia'] = "Seleccione alguna provincia";
}


    if(empty($errores)){
        echo "<h1>Datos recogidos del formulario</h1>";
        echo "<p>Nombre: $nombre </p>";
        echo "<p>Apellidos: $apellidos </p>";
        echo "<p>Teléfono: $telefono </p>";
        echo "<p>Email: $email </p>";
        echo "<p>Conmentario: $comentario </p>";
        echo "<p>¿Tienes Ordenador?: $ordenador </p>";
        echo "<p>Aficiones: ";
        foreach($aficiones as $key => $aficion){
            echo $aficion;
            if($key < count($aficiones) - 1){
                echo ", ";
            }else{
                echo ".";
            }
            
        }
        echo "</p>";
        echo "<p>Provincia:". $provincia . "</p>";
        echo "<a href=". $_SERVER['PHP_SELF']. ">VOLVER AL FORMULARIO</a>";
    }else{
        include("Formulario.php");
    }


}else{
    include("Formulario.php");
}

?>