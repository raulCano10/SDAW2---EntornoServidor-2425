<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipos Futbol</title>
</head>
<body>
    <h1>Clasificacion de Equipos de Fútbol</h1>

    <?php
    $equipos = [
        "Almeria" => 40,
        "Athletic Bilbao" => 33,
        "Barcelona" => 200,
        "Madrid" => 199,
        "Deportivo" => 33
    ];

    arsort($equipos);
    $clasificacion = array_keys($equipos);
    ksort($equipo);

    ?>
    
</body>
</html>