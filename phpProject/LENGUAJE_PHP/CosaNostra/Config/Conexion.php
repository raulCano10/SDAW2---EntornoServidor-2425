<?php
class Conexion {
    //Crear una función de conexión nueva, conectarPDO() de forma estatica garantizando que solo podrá existir una conexión activa      
    private static $server = 'localhost';
    private static $user = 'root';
    private static $pass = '';
    private static $db = 'cosa_nostra';
    public static $conexion = null;

    public static function connect(){
        if(self::$conexion === null){
            try{
                $dns = "mysql:host=" . self::$server . ";dbname=" . self::$db . ";charset=utf8";
                self::$conexion = new PDO($dns, self::$user, self::$pass);
                self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$conexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

             }
             catch(PDOException $ex){
                 die("Error de conexion" . $ex->getMessage());
             }catch(Exception $ex){
                 die("Error generico de conexion" . $ex->getMessage());
             }
        }
        return self::$conexion;
    }
}

