<?php

$options = [
    'location' => 'http://localhost/api_soap/server.php',
    'uri'=> 'http://localhost/api_soap '
];

$cliente = new SoapClient(null,$options);


echo "<h2> PRUEBA SOAP ALUMNOS SERVICE </h2>";

echo "resultado: " . $cliente->getHola("RAUL");

$id = 2;
$usuario = $cliente->obtenerAlumno($id);
echo $usuario['nombre'];
echo $usuario['email'];

?>