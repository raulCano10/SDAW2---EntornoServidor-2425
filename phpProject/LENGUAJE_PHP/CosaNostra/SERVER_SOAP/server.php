<?php
require_once 'CosaNostraService.php';

$server = new SoapServer(null, [
    'uri' => 'http://localhost/CosaNostra/Soap/server.php'
]);

$server->setClass('CosaNostraService');
$server->handle();
?>
