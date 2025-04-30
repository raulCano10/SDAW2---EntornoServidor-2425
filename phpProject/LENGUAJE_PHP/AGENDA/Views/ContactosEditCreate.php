<?php
require_once __DIR__ . "/../Controllers/ContactosController.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Config/Estilo.css">
    <title>CREAR/EDITAR CONTACTO</title>
</head>
<body>

<?php
if($_GET){
echo "<pre>";
echo print_r($_GET);
echo "</pre>";
}

if($_POST){
    echo "<pre>";
    echo print_r($$_POST);
    echo "</pre>";
    }

$contacto = [];
if(isset($_GET['editar'])){
     $editar = true;
     $contactosController = new ContactosController();
     $contacto = $contactosController->getContacto($_GET['id_contacto']);
     echo "<pre>";
     echo print_r($contacto);
     echo "</pre>";
}
?>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" class="formulario-contacto">

        <input type="hidden" name="id" value="<?php echo (empty($contacto)) ? "" : $contacto[0]['id_contacto']; ?>">
        <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="<?php echo (empty($contacto)) ? "" : $contacto[0]['nombre']; ?>">
        </div>
        <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?php echo (empty($contacto)) ? "" : $contacto[0]['email']; ?>">
        </div>
        <div class="form-group">
        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" id="telefono" value="<?php echo (empty($contacto)) ? "" : $contacto[0]['tlf']; ?>">
        </div>
        <div class="form-group">
        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" id="direccion" value="<?php echo (empty($contacto)) ? "" : $contacto[0]['direccion']; ?>">
        </div>

    </form>
</body>
</html>