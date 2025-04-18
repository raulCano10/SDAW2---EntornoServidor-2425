<?php
//Formulario de Gestión de traidores.
require_once __DIR__ . "/../Controllers/AsignacionController.php";

//TODO: Cliente SOAP para obtener los traidores getTraidores.
try{
    $opciones = [
        'location' => 'http://localhost/CosaNostra/Soap/server.php',
        'uri' => 'http://localhost/CosaNostra/Soap'
    ];
    $cliente = new SoapClient(null, $opciones);
    $traidores = $cliente->getTraidores(80);

    //  echo "<pre>";
    //  print_r($traidores);
    //  echo "</pre>";

}catch(Exception $ex){
    echo "Error al conectar con el servicio SOAP: " . $ex->getMessage();
}


//TODO: Procesar a los traidores obtenidos.
$asignacionController = new Asignacioncontroller();
$asignacionController->procesarTraidores($traidores);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estilos/estiloForm.css">
    <title>Procesar Traidores - Familia Corleone</title>
</head>
<body>
    <div class="container">
        <h2>Procesar Traidores - Familia Corleone</h2>
        <!-- TODO: Tabla Traidores -->
         <?php if(count($traidores) > 0){ ?>
         <h3>Lista de Traidores (Lealtad < 80%)</h3>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Lealtad (%)</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($traidores as $traidor){ ?>
                    <tr>
                        <td><?php echo $traidor['id'];?></td>
                        <td><?php echo $traidor['nombre'];?></td>
                        <td><?php echo $traidor['lealtad'];?></td>
                    </tr>
                    <?php } ?>
            </tbody>
        </table>
              <?php }else{ ?>
                <p>No se han encontrado traidores en la familia</p>
            <?php } ?>
            <br><br>
              
    </div>
    <br><br>
    <!-- TODO: Botón volver al menu principal -->
     <form action="../index.php">
        <button type="submit">Volver al Menú Principal</button>
     </form>
    <!-- ... -->
</body>
</html>

