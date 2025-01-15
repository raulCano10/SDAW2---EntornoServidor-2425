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

function mostrar_campo($campo){
    if(isset($_POST[$campo])){
        echo 'value="' . $_POST[$campo]. '"';
    }
}

?>