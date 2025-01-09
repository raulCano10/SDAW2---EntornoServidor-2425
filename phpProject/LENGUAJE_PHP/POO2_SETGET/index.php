<?php

include_once ('Clases/Persona.php');

echo "<pre>";
$persona = new Persona("Raúl", 43);

echo "<br>Mostrar informacion al inicio<br>";
$persona->mostrarInformacion();

$persona->telefono = "658668899";
$persona->direccion = "Calle de la esperanza 3";
$persona->email = "raul@gmail.com";
$persona->portal = "8";

echo "<br>get Direccion<br>";
echo $persona->direccion . "<br>";

echo "<br>get telefono<br>" ;
echo $persona->direccion . "<br>";

echo "<br>Mostrar informacion al final<br>";
$persona->mostrarInformacion();


echo "</pre>";
?>