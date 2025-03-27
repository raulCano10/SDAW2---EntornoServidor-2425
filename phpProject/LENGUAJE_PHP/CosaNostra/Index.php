<?php
// Menú inicial con dos redirecciones: 
// 1. AsignacionView.php para la asignación de operaciones.
// 2. ProcesarTraidoresView.php para la gestión de traidores.
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos/estiloForm.css">
    <title>Menú Inicial - Familia Corleone</title>
</head>
<body>
    <div class="container">
        <h2>Menú Inicial - Familia Corleone</h2>
        <form action="Views/AsignacionView.php">
            <button type="submit">Ir a Asignación de Operaciones</button>
        </form>
        <br><br>
        <form action="Views/ProcesarTraidoresView.php">
            <button type="submit">Ir a Procesar Traidores</button>
        </form>
    </div>

    <?php
    // require_once __DIR__ . "/Config/Conexion.php";
    // Conexion::connect();
    ?> 
</body>
</html>
