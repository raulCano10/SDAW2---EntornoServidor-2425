<?php
//require_once __DIR__ . "/../Config/Conexion.php";
require_once __DIR__ . "/../Controllers/ContactosController.php";

//Probamos que conectamos correctamente con la Base de Datos.
// $conn = new Conexion();
// $result = $conn->getConexion();
// $conexion = (new Conexion())->getConexion();

$contactosController = new ContactosController();
$listaContactos = $contactosController->getContactos();

if($_POST){
  echo "<pre>";
  echo print_r($_POST);
  echo "</pre>";
}

if(isset($_POST['editarContacto'])){
    $id = $_POST['editarContacto'];
    header("Location: Views/ContactosEditCreate.php?editar=true&id_contacto=$id");
    exit;
}elseif(isset($_POST['crearContacto'])){
    header("Location: Views/ContactosEditCreate.php?crear=true");
    exit;
}elseif(isset($_POST['borrarContacto'])){
    $id = $_POST['borrarContacto'];
    ?>
    <dialog open>
        <p>¿Quieres eliminar el contacto con id <?php echo $_POST['borrarContacto']?>?</p>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
            <button type="submit" name="borrarAceptar" id="borrarAceptar<?php echo $id?>" value="<?php echo $id?>">Aceptar</button>
            <button type="submit" name="borrarCancelar" id="borrarCancelar<?php echo $id?>" value="<?php echo $id?>">Cancelar</button>
        </form>
    </dialog>
<?php
}elseif(isset($_POST['borrarAceptar'])){
//LLamaremos a controlador de contactos controler y le pediremos que borre el contacto

}
// elseif(isset($_POST['borrarCancelar'])){
//     //NO HACEMOS NADA

// }


//  echo "<pre>";
//  echo print_r($listaContactos);
//  echo "</pre>";



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="Config/Estilo.css">
    <title>LISTADO DE CONTACTOS</title>
</head>
<body>

    <div class="contenedor-crear">
        <!-- <form action="Views/ContactosEditCreate.php" method="POST"> -->
        <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
            <button type="submit" name="crearContacto" class="btn-crear">+ Crear contacto</button>
        </form>
    </div>

    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
        <table>
            <thead>
                <tr>
                    <th>Operación</th>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Dni</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($listaContactos as $contacto){?>
                    <tr><td>
                            <!-- TODO: INCLUIR BOTONES DE BORRAR Y EDITAR -->
                             <button type="submit" name="editarContacto" value="<?php echo $contacto['id_contacto']?>">Editar</button>
                             <button type="submit" name="borrarContacto" value="<?php echo $contacto['id_contacto']?>">Borrar</button>
                        </td>
                        
                        <td><?php echo $contacto['id_contacto']?></td>
                        <td><?php echo $contacto['nombre']?></td>
                        <td><?php echo $contacto['email']?></td>
                        <td><?php echo $contacto['tlf']?></td>
                        <td><?php echo $contacto['direccion']?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </form>
    
</body>
</html>