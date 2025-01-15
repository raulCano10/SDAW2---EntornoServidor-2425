
<form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
        <p>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre"<?php mostrar_campo("nombre")?> 
            >          
            <?php mostrarErrores2("nombre", $errores) ?>
        </p>
        <p>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" <?php mostrar_campo("email")?>
            >
            <?php mostrarErrores2("email", $errores) ?>          
        </p>
        <p>
            <label for="clave1">Clave</label>
            <input type="password" id="clave1" name="clave1" <?php mostrar_campo("clave1")?>
            >
            <?php mostrarErrores2("clave1", $errores) ?>            
        </p>
        <p>
            <label for="clave2">Repetir Clave</label>
            <input type="password" id="clave2" name="clave2" <?php mostrar_campo("clave2")?>
            >
            <?php mostrarErrores2("clave2", $errores) ?>          
        </p>
        <input type="submit" value="ENVIAR">
    </form>