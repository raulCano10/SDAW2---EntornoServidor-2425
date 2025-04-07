<?php
// TODO: Formulario de asignación de operaciones.
require_once __DIR__ . "/../Controllers/MiembrosController.php";
require_once __DIR__ . "/../Controllers/OperacionesController.php";
require_once __DIR__ . "/../Controllers/AsignacionController.php";

$miembrosController = new MiembrosController();
$listaMiembros = $miembrosController->getMiembros();

$operacionesController = new OperacionesController();
$listaoperaciones = $operacionesController->getOperaciones(150000);

$asignacionController = new AsignacionController();


//   echo "<pre>";
//   print_r($listaoperaciones);
//   echo "</pre>";

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['asignar'])){
       echo "<pre>";
       print_r($_POST);
       echo "</pre>";

       $idMiembro = $_POST['IdMiembro'];
       $idOperacion = $_POST['idOperacion'];

       $asignadaConExito = $asignacionController->asignarOperacion($idMiembro, $idOperacion);
    if($asignadaConExito){
        echo "<p>Operación asignada con éxito</p>";
    }else{
        echo "<p>Ya existe la asignación</p>";
    }
       
    //$idMiembro = $_POST['']


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignación de Operaciones - Familia Corleone</title>
</head>
<body>
    <h1>Asignación de Operaciones - Familia Corleone</h1>

    <form method="POST">
        <h3>Seleccionar miembro:</h3>

        <select name="IdMiembro" id="IdMiembro">
            <?php foreach ($listaMiembros as $miembro) {?>
                <option value="<?php echo $miembro['id'] ?>"><?php echo $miembro['nombre']; echo ' (' . $miembro['rol'] . ')'; ?> </option>
            <?php } ?>
        </select>
       
        <h3>Seleccionar Operación (valor > 150.000€):</h3>
        <?php 
        //TODO:  TRABAJO 3.  Mostrar todas las operaciones cuyo valor estimado sea mayor de 150.000€ 
        // (en botones tipo radio)?>
        <?php 
        if(count($listaoperaciones)){
            foreach($listaoperaciones as $operacion){ ?>
            <label for="<?php echo 'idOperacion' . $operacion['id']?>">
            <input type="radio" name="idOperacion" id="<?php echo 'idOperacion' . $operacion['id']?>" value="<?php echo $operacion['id']?>" required>
            <?php echo $operacion['nombre'] . " - " . $operacion['valor_estimado'] . "euro"?><br><br>
            </label>

        <?php     }?>
        <?php     }?>

        <button type="submit" name="asignar">Asignar Operación</button>
    </form>
</body>
</html>


