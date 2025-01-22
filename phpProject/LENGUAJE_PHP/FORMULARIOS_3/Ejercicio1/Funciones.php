<?php

function mostrarErrores($errores){
    echo "<ul>";
        foreach($errores as $error){
            echo "<li>$error</li>";
        }
    echo "</ul>";
}

function mostrarErrores2($campo, $errores){
    if(isset($errores[$campo])){
        echo $errores[$campo];
    }
}

function mostrarErrores2Rojo($campo, $errores){
    if(isset($errores[$campo])){
        echo '<span style="color: red">' . $errores[$campo] . '</span>';
    }
}

function mostrar_campo($campo){
    if(isset($_POST[$campo])){
        echo 'value="' . $_POST[$campo]. '"';
    }
}

?>