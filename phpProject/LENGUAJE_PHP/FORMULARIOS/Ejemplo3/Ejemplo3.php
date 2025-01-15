<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estilos/estilo1.css">
    <title>EJEMPLO 3</title>
</head>

    <header>
        <h1>Convierte segundos a minutos</h1>
    </header>

    <main>

        <?php
        if($_POST){
            if(isset($_POST["segundos"]) && $_POST["segundos"] !== ''){
                $segundos = $_POST["segundos"];

                $minutos_convertidos = (int)($segundos / 60);

                $segundos_convertidos = $segundos % 60;

                echo "$segundos son $minutos_convertidos minutos y $segundos_convertidos segundos";
            }else{
                echo "POST VACIO!!!";
            }
        }else{ ?>
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                Escriba una cantidad en segundos y la convertirá en minutos y segundos
                <label from="segundos"> Segundos </label>
                <input type="text" id ="segundos" name="segundos">
                <input type="submit" value="CONVERTIR">
                </form>
            <?php
            }       
        ?>
    </main>

    <footer></footer>
</body>
</html>