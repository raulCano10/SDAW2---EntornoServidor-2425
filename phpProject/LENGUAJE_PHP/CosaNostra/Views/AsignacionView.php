<?php
// TODO: Formulario de asignación de operaciones.
require_once __DIR__ . "/../Controllers/AsignacionController.php";
require_once __DIR__ . "/../Controllers/MiembrosController.php";

//$asignacionController = new Asignacioncontroller();

$miembrosController = new MiembrosController();
//$operacionesController = new OperacionesController();


$listaMiembros = $miembrosController->getMiembros();
echo "<pre>";
print_r($listaMiembros);
echo "</pre>";
//$listaOperaciones = $operacionesController->getOperaciones();

?>
