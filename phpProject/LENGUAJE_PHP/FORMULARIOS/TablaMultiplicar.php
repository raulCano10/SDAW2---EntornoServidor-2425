<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos/estilo1.css">
    <title>Tabla de Multiplicar</title>
</head>
<body>
    <h1>TABLA DE MULTIPLICAR</h1>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="POST">
        <p>
            <label for="horizontal"> Horizontal:</label>
            <input type="number" id="horizontal" name="horizontal" min="1" required>
        </p>
        <p>
            <label for="vertical">Vertical:</label>
            <input type="number" id="vertical" name="vertical" min="1"required>
        </p>
        <br><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
        if($_POST){
            $horizontal = $_POST["horizontal"];
            $vertical = $_POST["vertical"];

            //print_r($_POST);
            
            echo "<h1>RESULTADO:</h1>";
            echo "<table>";
            
            //Primera linea horizontal
            echo "<tr>";
            echo "<th>X</th>";          
            for($i = 1; $i <= $horizontal ; $i++){
                echo "<th>$i</th>";
            }
            echo "</tr>";

            for($j = 1; $j <= $vertical; $j++){
                echo "<tr>";
                echo "<th>$j</th>";
                for($i = 1; $i <= $horizontal ; $i++){
                    echo "<td>". ($j*$i) ."</td>";
                }
                echo "</tr>";
            }


            echo "</table>";

        }
    ?>
</body>
</html>