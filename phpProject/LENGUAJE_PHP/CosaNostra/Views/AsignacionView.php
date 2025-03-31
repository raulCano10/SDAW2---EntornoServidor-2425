<?php
// TODO: Formulario de asignación de operaciones.
require_once __DIR__ . "/../Controllers/MiembrosController.php";
//require_once __DIR__ . "/../Controllers/OperacionesController.php";
require_once __DIR__ . "/../Controllers/AsignacionController.php";

//$asignacionController = new Asignacioncontroller();

$miembrosController = new MiembrosController();
//$operacionesController = new OperacionesController();


$listaMiembros = $miembrosController->getMiembros();
//$listaOperaciones = $operacionesController->getOperaciones();
echo "<pre>";
print_r($listaMiembros);
echo "</pre>";
//$listaOperaciones = $operacionesController->getOperaciones();

?>
