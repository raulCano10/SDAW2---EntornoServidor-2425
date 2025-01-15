<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATOS EJEMPLO 1</title>
</head>
<body>
    <?php
    //Verificar que los campos estan en la url
    if( isset($_GET["peso"]) 
    && isset($_GET["altura"])
    && ($_GET["peso"] !== '') 
    && ($_GET["altura"] !== '')
    ){
        $peso = $_GET["peso"];
        $altura = $_GET["altura"];
        //paso la altura a metros
        $altura_metros = $altura/100;

        $icm = $peso / ($altura_metros ** 2);

        $icm_redondeado = round($icm,2);

        echo "El indice de masa corporal es IMC = ". $icm_redondeado;
    }else{
        echo "<p>No se han proporcionado los datos de peso y altura correctamente para calcular el IMC</p>";
    }
    ?>
</body>
</html>