<?php
require_once __DIR__ . "/../Controllers/FamiliaController.php";

//1. Crear el formulario de datos entrada

//Control de Famila sera un desplegable
//Control de Famila sera muchos radio button
//2. Necesito obtener todas las familias de BD

$familiaController = new FamiliaController();
$familias = $familiaController->obtenerFamilias();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>ALTA DE PRODUCTOS CON DESPLEGABLE</h2>
   <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">

   <label for="codigoProducto">Codigo Producto:</label>
   <input type="text" name="codigoProducto" id="codigoProducto">

   <label for="nombreProducto">nombreProducto Producto:</label>
   <input type="text" name="nombreProducto" id="nombreProducto">

   <!-- Incluir la familia con desplegable -->
    <label for="familiaDesplegable">Selecciona Familia:</label>
    <select name="familiaDesplegable" id="familiaDesplegable">
        <?php
            foreach($familias as $familia){?>
                <option value="<?php echo $familia['cod']; ?>">
                    <?php echo $familia['nombre'];?>
                </option>
            <?php
        }
        ?>
    </select>

    <button type="submit">Añadir Producto</button>
   </form>

<h2>ALTA DE PRODUCTOS CON RADIO BUTTONS</h2>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">

   <label for="codigoProducto">Codigo Producto:</label>
   <input type="text" name="codigoProducto" id="codigoProducto">

   <label for="nombreProducto">Nombre Producto:</label>
   <input type="text" name="nombreProducto" id="nombreProducto">

   <!-- Incluir la familia con Radio button -->
   <label for="familiaRadio">Selecciona Familia:<br></label>
   <?php
            foreach($familias as $familia){?>
             <input type="Radio" name="familiaRadio" id="familiaRadio" value="<?php echo $familia['cod']; ?>" required>
             <?php echo $familia['nombre'];?><br>
            <?php
            
        }
        ?>

    <button type="submit">Añadir Producto</button>
   </form>
</body>
</html>

