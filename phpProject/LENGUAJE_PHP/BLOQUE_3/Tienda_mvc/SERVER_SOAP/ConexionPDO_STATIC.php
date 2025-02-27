<?php

class ConexionPDO_STATIC{
    private static $server = "localhost";
    private static $usuario = "root";
    private static $pass = "";
    private static $bdName = "dwes";
    private static $conexion = null;

    public static function connect(){
        
        if(self::$conexion === null){
            try{
                self::$conexion = new PDO("mysql:host=".self::$server.";dbname=".self::$bdName.";charset=utf8",self::$usuario, self::$pass);
                self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(Exception $ex){
                error_log("Error de conexion con BD" . $ex->getMessage());
            }
        }

        return self::$conexion;
    }
}
    


?>