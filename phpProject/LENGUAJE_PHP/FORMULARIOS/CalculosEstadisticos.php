<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculos estadisticos</title>
</head>
<body>
    <h1>Cálculos Estadisticos</h1>


<?php
    if($_POST && isset($_POST['cantidad'])){
        //Mostraremos el formulario 2
        $cantidad = $_POST['cantidad'];
?>
        <form method="POST">
            <h2>Escribe los valores y marca las casillas correspondientes a los cálculos que quieres</h2>

        <?php
            for($i = 1; $i <= $cantidad; $i++){
                echo "<br> Número $i: <input type='number' name='numeros[]' required>";
            }
        ?>
            <p>
                <input type="checkbox" name="operaciones[]" value="suma" > Suma  
                <input type="checkbox" name="operaciones[]" value="media" > Media 
                <input type="checkbox" name="operaciones[]" value="maximo" > Máximo 
                <input type="checkbox" name="operaciones[]" value="minimo" > Mínimo                
            </p>
            <br>
            <button type="submit">Calcular Entrada</button>
        </form>

<?php  
    }elseif($_POST && isset($_POST['numeros'])){
        //En este caso vamos a calcular los resultados
        $valores = array_map('intval',$_POST['numeros']);
        $operaciones = [];
        if(isset($_POST['operaciones'])){
            $operaciones = $_POST['operaciones'];
        }
       
        echo "<h2>RESULTADOS</h2>";
        echo "Los valores que has introducido son: " . implode(", ", $valores) . "<br>";
    // foreach($aficiones as $key => $aficion){
            //     echo $aficion;
            //     if($key < count($aficiones) - 1){
            //         echo ", ";
            //     }else{
            //         echo ".";
            //     }
                
            // }
        if(in_array('suma',$operaciones)){
            echo "La suma de los numeros es: " . array_sum($valores) . "<br>";
        }

        if(in_array('media',$operaciones)){
            echo "La Media de los numeros es: " . round( (array_sum($valores) / count($valores)), 2) . "<br>";

        }

        if(in_array('maximo',$operaciones)){
            echo "El Máximo de los numeros es: " . max($valores) . "<br>";

        }

        if(in_array('minimo',$operaciones)){
            echo "El Mínimo de los numeros es: " . min($valores) . "<br>";

        }
    }else{
?>
        <form action="" method="POST">
    <h2>Escribe cuantos valores quieres introducir</h2>
    <label for="cantidad">Cantidad:</label>
    <input type="number" id="cantidad" name="cantidad" min="1" required>
    <br><br>
    <button type="submit">Mostrar Formulario de Entrada</button>
</form>
<?php
    }
?>


</body>
</html>