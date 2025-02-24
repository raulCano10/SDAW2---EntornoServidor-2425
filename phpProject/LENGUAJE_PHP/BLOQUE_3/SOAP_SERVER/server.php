<?php

require_once 'AlumnosService.php';
//SOAP (Simple Object Acces Protocol) Protolo de comunicacion entre sitemas
//La comunicacion es através de ficheros XML y puede funcionar en HTTP, SMTP

//Exponemos funciones para que puedan ser consumidas 
// o invocadas por terceros mediate mansajes XML con una cierta esstructura

//XML: Para el intercambio de datos
//SOAP Envelope: Estructura estandar de los mensajes XLM
//WSDL: son opcionales y son contratos que describen las operaciones, rutas, parametros etc.

$uri = "http://localhost/api_soap";
//$server = new SoapServer(null, array('uri'=>$uri));

$options =[
    'uri'=> 'http://localhost/api_soap',
    'exceptions' => true, //Camtura de excepciones
    'trace' => true //Guarda detalles de las solicitudes y respuestas
];

$server = new SoapServer(null, $options);

$server->setClass('AlumnosService');
//Inicia el proceso de escucha del servidor
//Para que se puedan atender las peticiones
//Llama al metodo o funcion correspondiente devuelve respuesta en formato XML siguiendo el protocolo SOAP
$server->handle();

?>