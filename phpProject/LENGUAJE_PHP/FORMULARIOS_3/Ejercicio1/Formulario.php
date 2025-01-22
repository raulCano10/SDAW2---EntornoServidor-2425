<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Alta Usuario</title>
</head>
<body>
    <header>
        <h1>Formulario de Alta</h1>
    </header>

    <main>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
            <fieldset>
                <legend>
                    Formulario de Ejemplo
                </legend>
                <label for="nombre"> NOMBRE:
                    <input type="text" id="nombre" name="nombre" <?php mostrar_campo("nombre")?>> 
                    <?php mostrarErrores2Rojo('nombre',$errores)?>
                </label><br>
                
                <label for="apellidos"> APELLIDOS:
                    <input type="text" id="apellidos" name="apellidos" <?php mostrar_campo("apellidos")?>> 
                    <?php mostrarErrores2Rojo('apellidos',$errores)?>
                </label><br>

                <label for="password"> CONTRASEÑA:
                    <input type="password" id="password" name="password" <?php mostrar_campo("password")?>> 
                    <?php mostrarErrores2Rojo('password',$errores)?>
                </label><br>

                <label for="telefono"> TELEFONO:
                    <input type="text" id="telefono" name="telefono" <?php mostrar_campo("telefono")?>> 
                    <?php mostrarErrores2Rojo('telefono',$errores)?>
                </label><br>
            
                <label for="email"> EMAIL:
                    <input type="email" id="email" name="email" <?php mostrar_campo("email")?>> 
                    <?php mostrarErrores2Rojo('email',$errores)?>
                </label><br>
            
                <label>COMENTARIO:
                    <textarea name="comentario"></textarea>
                </label><br>

                <label>¿TIENES ORDENADOR?:</label>
                <label>
                    <input type="radio" name="ordenador" value="SI" <?php echo ($ordenador == "SI") ? 'checked' : '' ?> >Si
                </label>
                <label>
                    <input type="radio" name="ordenador" value="NO" <?php echo ($ordenador == "NO") ? 'checked' : '' ?>>No
                </label>
                <?php mostrarErrores2Rojo('ordenador',$errores)?>
                <br>
                <label>AFICIONES:</label>
                <label>
                    <input type="checkbox" name="aficiones[]" value="Atletismo" 
                    <?php echo in_array("Atletismo", $aficiones) ? 'checked' : ''; ?>>Atletismo
                </label>

                <label>
                    <input type="checkbox" name="aficiones[]" value="Futbol" 
                    <?php echo in_array("Futbol", $aficiones) ? 'checked' : ''; ?>>Fútbol
                </label>

                <label>
                    <input type="checkbox" name="aficiones[]" value="Baloncesto" 
                    <?php echo in_array("Baloncesto", $aficiones) ? 'checked' : ''; ?>>Baloncesto
                </label>
                <?php mostrarErrores2Rojo('aficiones',$errores)?>
                <br>
                <label>Provincia:
                    <select name="provincia">
                        <option value="Murcia">Murcia</option>
                        <option value="Barcelona">Barcelona</option>
                        <option value="Madrid">Madrid</option>
                        <option value="Alicante">Alicante</option>
                    </select>
                </label>
                <?php mostrarErrores2Rojo('provincia',$errores)?>
                <br>
                <button type="submit">ENVIAR</button>
                <button type="reset">BORRAR</button>

            </fieldset>
        </form>
        
    </main>

    <footer></footer>
    
</body>
</html>