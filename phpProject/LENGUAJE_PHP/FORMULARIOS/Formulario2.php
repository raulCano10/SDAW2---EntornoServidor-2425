<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos/estilo1.css">
    <title>Recogida de datos desde la propia pagina</title>
</head>
<body>
    
<form action="<?php $_SERVER["PHP_SELF"]; ?>" method="get">

<label for="nombre">Nombre de alumno</label>
<input type="text" id="nombre" name="nombre"><br>
<p>Modulos que cursa:</p>
<input type="checkbox" name="modulos[]" value="DWES">Desarrollo web en entorno servidor <br>
<input type="checkbox" name="modulos[]" value="DWEC">Desarrollo web en entorno cliente <br>
<br>
<input type="submit" vale="ENVIAR">
</form>

<?php 
// echo "<pre>";
 echo $_SERVER["PHP_SELF"];
// print_r($_SERVER); 
// echo "</pre>";
echo "<pre>";
print_r($_GET);
echo $_GET["nombre"];
echo "</pre>";
?>

    
</body>
</html>