<?php

require_once __DIR__ . '/ProductoServices.php';

$options = [
    'uri' => 'http://localhost/soap_server',
    'trace' => 1,
    'exceptions' => true
];

try{
    $server = new SoapServer(null,$options);
    $server->setClass('ProductoServices');
    $server->handle();

}catch(Exception $ex){
    echo "Error en servidor SOAP: " . $ex->getMessage();
}


?>