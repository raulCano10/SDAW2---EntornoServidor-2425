<?php


class BD{
    const HOST = 'localhost';
    const USUARIO = 'miUsuario';
    const CONTRASENA = 'sss1223244';
    const BD_NAME = 'mi_Base_de_datos';

    private static $numeroConexiones = 0;

    public static function obtenerConfiguracionBD(){
        return['host' => self::HOST,
               'usuario' => self::USUARIO,
               'contrasena' => self::CONTRASENA,
               'bd' => self::BD_NAME];
    }

    public static function nuevaConexion(){
        self::$numeroConexiones++;
    }

}

//Las constantes no se pueden modificar (No esta permitido)
//BD::USUARIO = 'admin';

echo "Configuración de la base de datos: <br>";
echo "Host: " . BD::HOST . "<br>";
echo "Usuario ". BD::USUARIO . "<br>";
echo "Password ". BD::CONTRASENA . "<br>";
echo "Base de Datos ". BD::BD_NAME . "<br>";

print_r(BD::obtenerConfiguracionBD());


?>