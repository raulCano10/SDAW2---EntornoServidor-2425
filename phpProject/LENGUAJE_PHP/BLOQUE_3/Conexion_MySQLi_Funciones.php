<?php

//echo phpinfo();
//--- CONEXION CON BD METODO PROCEDIMENTAL (Funciones) ---
$server = "localhost";
$userName = "root";
$pass = "";
$db = "ies_bd";

try{
    //$conexion = mysqli_connect("localhost","root","","ies_bd");
    $conexion = mysqli_connect($server,$userName,$pass,$db );

    echo "Conexion a BD realizada correctamente";

    // ---- OBTENER CONJUNTOS DE DATOS -----

    $consulta = "SELECT * FROM alumnos";
    $resultado = mysqli_query($conexion, $consulta);
    //Los datos se se devuelven en forma de objeto.
    // Resultado es un objeto de tipo mysli_result
    //Si la consulta se ejecuta correctamente se devuelven las filas obtenidas
    // si hay error devuelve false
    if($resultado){
        echo "<br>Consulta ejecutada correctamente.";
        //mysqli_fetch_array: Obtiene un registro completo del conjunto de resultados.
        // Contienen el array tanto con claves numericas como con claves asociativas
        // Cada vez que llame a la funciion mysqli_fetch_array me devolverá un registro
        $fila1 = mysqli_fetch_array($resultado);
        $fila2 = mysqli_fetch_array($resultado);
        $fila3 = mysqli_fetch_array($resultado);
        $fila4 = mysqli_fetch_array($resultado);

        // echo $fila1[0];
        // echo $fila1['id'];

        // echo "<pre>";
        // print_r($fila1); 
        // echo "</pre>";
        // echo "<pre>";
        // print_r($fila2); 
        // echo "</pre>";
        // echo "<pre>";
        // print_r($fila3); 
        // echo "</pre>";
        // echo "<pre>";
        // print_r($fila4); 
        // echo "</pre>";

        //Si no quedan filas la funcion delvuelve FALSE
        while($fila = mysqli_fetch_array($resultado)){
            echo "<pre>";
            //print_r($fila); 
            echo "</pre>";
        }

        //Funcion para resetear el puntero
        mysqli_data_seek($resultado,0);

        //Almacena los datos en un array
        //1. MYSQLI_NUM Devuelve un array con claves numericas
        //2. MYSQLI_ASSOC Devuelve un array con claves asociativas
        //3. MYSQLI_NUM Devuelve un array con ambas claves
        $datos1 = mysqli_fetch_all($resultado,MYSQLI_ASSOC);
        mysqli_data_seek($resultado,0);
        $datos2 = mysqli_fetch_all($resultado,MYSQLI_NUM);
        mysqli_data_seek($resultado,0);
        $datos3 = mysqli_fetch_all($resultado,MYSQLI_BOTH);
        mysqli_data_seek($resultado,0);

        echo "ARRAY KEY ASOCIATIVO<br>";
        echo "<pre>";
        //print_r($datos1); 
        echo "</pre>";
        foreach($datos1 as $fila){
            echo "<pre>";
           // print_r($fila); 
            echo "</pre>";
        }

echo "<hr>";
        echo "ARRAY KEY NUMERICA<br>";
        echo "<pre>";
        //print_r($datos2); 
        echo "</pre>";
        echo "<hr>";
        echo "ARRAY CON AMBAS KEYs<br>";
        echo "<pre>";
        //print_r($datos3); 
        echo "</pre>";
        
        //Te devuelve las filas con las claves numericas     
        mysqli_fetch_row($resultado);
        while($fila = mysqli_fetch_row($resultado)){
            echo "<pre>";
            //print_r($fila); 
            echo "</pre>";
        }

        //Te devuelve las filas con las claves asociativas (nombre de los campos)
        mysqli_fetch_assoc($resultado);
        while($fila = mysqli_fetch_assoc($resultado)){
            echo "<pre>";
            //print_r($fila); 
            echo "</pre>";
        }

        //--------- TRANSACCIONES ----------
        // Una transaccion un conjunto operaciones que se ejecutan en el servidor de BD
        //  y se ejecutan en bloque y si se produce algun fallo 
        // entonce se revierten todos los cambios que se hayan ejecutado
        // 
        // Por defecto cada una de las consultas SQL en PHPse ejecutan de forma AUTOCOMIT

        //Tenemos que desactivar el autocomit para poder manejarlo nosotros manualmente.

        mysqli_autocommit($conexion, true);

        //Al desactivarlo las siguientes transacciones no se ejecutaran automaticamente 
        //hasta que nostoros ejecutemos un commit

        //$ConsultaUpdate1 = "UPDATE profesores SET telefono = '999999999' where id = 1"; 
        $ConsultaUpdate2 = "UPDATE profesores SET telefono = '111111111' where id = 2 or id = 1 or id = 3";
        //$resultado1 = mysqli_query($conexion, $ConsultaUpdate1);
        $resultado2 = mysqli_query($conexion, $ConsultaUpdate2);
        $registrosAfectados = mysqli_affected_rows($conexion);
        echo $registrosAfectados. "Registro modificados<br>";

        if(mysqli_commit($conexion)){ //TRUE si transaccion OK
            echo "<br>Se ha ejecutado correctamente la transaccion<br>";
            // $registrosAfectados = mysqli_affected_rows($conexion);
            // echo $registrosAfectados. "Registro modificados<br>";
        }else{ //FALSE si no ha ido correctamente
            echo "<br>Error en la transaccion<br>";
            //Si alguna consulta falla --> hay que hacer un rollback();
            // para que nos revierta los cambios
            //De este modo garantizamos que la base de datos quedara en su estado original antes del commit
            if(mysqli_rollback($conexion)){
                echo "<br>Rollback ejecutado correctamente";
            }else{
                echo "<br>Error al ejecutar el rollback";
            }
        }

        echo "<br>Paso por aqui";

    }else{
        echo "<br>Error al ejecutar la consulta.";
    }

    //Libreamos recursos
    //mysqli_free_result($resultado2);
    //mysqli_close($conexion);

    //------ CONSULTAS PREPARADAS ------
    //PASO 1: Definir la consulta con ? (marcador de posicion)
    //PASO 2: Inicializamos la consulta con la funcion mysqli_stmt_init()
    //PASO 3: Preparar la consulta en MySQL con la funcion mysqli_stmt_prepare()
    //PASO 4: Vincular los valores con la funcion mysqli_stmt_bind_param()
    //PASO 5: Ejecutar con la funcion  mysqli_stmt_execute();
    //PASO 6: Reutilizar la consulta cambian valores (sin volver a prepararla)
    //PASO 7 Cerrar consulta y conexion.

    //Paso 1
    $consulta1 = "UPDATE profesores SET apellidos = ?, asignatura = ? WHERE id = ?";

    //PASO 2
    //Obtenemos el objeto de la clase stmt para poder llamar a funciones de dicha clase
    $stmt = mysqli_stmt_init($conexion);

    //PASO 3: Preparo la consulta con mysqli_stmt_prepare. Si la constula tiene errores
    //devolverá FALSE
    mysqli_stmt_prepare($stmt, $consulta1);

    //PASO 4: vincular valores a la consulta (A las ?)
    $apellidos = "SANCHEZ";
    $asignatura = "MATEMATICAS";
    $id = 2;

    mysqli_stmt_bind_param($stmt,"ssi", $apellidos, $asignatura, $id);

    //PASO 5: Ejecutar la consulta
    if(mysqli_stmt_execute($stmt)){
        echo "Resgistro Actualizado correctamente";
    }else{
        echo "Error al actualizar el registro: ". mysqli_stmt_error($stmt);
    }

    //PASO 6: Reutilizar la funcion ya preparada
    $apellidos = "CANO";
    $asignatura = "LENGUA";
    $id = 3;

    if(mysqli_stmt_execute($stmt)){
        echo "Resgistro Actualizado correctamente";
    }else{
        echo "Error al actualizar el registro: ". mysqli_stmt_error($stmt);
    }

    //PASO 7: Cerramos objeto y cerramos conexion
    mysqli_stmt_close($stmt);
    mysqli_close($conexion);


}catch(Exception $ex){
    echo "<br>Error al ejecutar la consulta.";
    // ---- COMPROBAR ERRORES ----
    if(mysqli_connect_errno()){ //Devuelve el numero de error o bien un NULL si no se produce ningun error
        echo "Error de conexion:" . mysqli_connect_error(); //Devuelve el mensaje de error o bien null si no se produce ningun error
    }
}


?>