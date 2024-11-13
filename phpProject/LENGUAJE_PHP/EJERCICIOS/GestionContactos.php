<!DOCTYPE html>

<html>
<head> 
    <title> GESTION CONTACTOS </title>
</head>
<body>
    <?php
        /*
        Implementa un sistema de gestion de contactos con funciones para agregar, buscar y eliminar contactos.
        1. Crear un array asociativo MULTIDIMENSIONAL llamado "Contactos" que tenga nombre como claves y otro array como valor con datos 
        de telefono e email.
        
        CONTACTOS
        - Juan Perez 658447744 juan.perez@gmail.com
        - Ana Gómez 854221122 ana@gmail.com

        2. Escribe una funcino AgregarContactos que añada un nuevo contacto o actualice la informacion si el contacto 
        ya existe.

        3. Crea una funcion BuscarContacto que busque un contacto por nombre. si se encuentra , muestra la informacion;
        si no se encuentra muestra un mensaje de error.

        4. Implementa una funcion eliminar contacto que elimine un contacto del array si existe.
        Controlar los casos en los que el contacto no existe.

        5. Añade un bucle que muestre todos los contactos en orden alfabetico y utilice una estructura de control 
        para resaltar los contactos que tengan un numero de telefono con menos de 9 digitos
        */

        $contactos =[
            "Juan Perez" => ["telefono" => "658447744", "email" => "juan.perez@gmail.com"],
            "Ana Gómez" => ["telefono" => "854221122", "email" => "ana@gmail.com"]
        ];

        function agregarContacto(&$contactos,$nombre,$telefono,$email){
            $contactos[$nombre] = ["telefono" => $telefono, "email" => $email];
            echo "Contacto $nombre agragado/actualizado con éxito.<br>";
        }

        function buscarContacto($contactos, $nombre){
            $encontrado = false;
            foreach($contactos as $key => $contacto){
                if($key === $nombre){
                  $encontrado = true;
                   echo "Informacion de $nombre:<br>";
                   echo "Teléfono:" . $contacto["telefono"]. "<br>";
                   echo "Email:" . $contacto["email"]. "<br>";
                   break;
                }
            }

            if(!$encontrado){
                echo "Error: El contacto $nombre no existe:<br>";
            }
        }

        function buscarContacto2($contactos, $nombre){
            if(isset($contactos[$nombre])){
                echo "Informacion de $nombre :<br>";
                echo "Teléfono:" . $contactos[$nombre]["telefono"]. "<br>";
                echo "Email:" . $contactos[$nombre]["email"]. "<br>";
            }else{
                echo "Error: El contacto $nombre no existe:<br>";
            }
        }

        function buscarContacto3($contactos, $nombre){
            if(array_key_exists($nombre, $contactos)){  
                echo "Informacion de $nombre :<br>";
                echo "Teléfono:" . $contactos[$nombre]["telefono"]. "<br>";
                echo "Email:" . $contactos[$nombre]["email"]. "<br>";
            }else{
                echo "Error: El contacto $nombre no existe:<br>";
            }
        }

        function EliminarContacto(&$contactos, $nombre){
            if(isset($contactos[$nombre])){
                unset($contactos[$nombre]);
                echo "Error: El contacto $nombre se ha borrado con éxito<br>";
            }else{
                echo "Error: El contacto $nombre no existe:<br>";
            }
        }

        


    ?>
</body>
</html>
