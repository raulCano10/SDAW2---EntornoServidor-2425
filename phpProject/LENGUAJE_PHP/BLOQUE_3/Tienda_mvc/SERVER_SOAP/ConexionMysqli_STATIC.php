<?php

class ConexionMysqli_STATIC{
    private static $server = "localhost";
    private static $usuario = "root";
    private static $pass = "";
    private static $bdName = "dwes";
    private static $conexion = null;

    public static function connect(){
        
        if(self::$conexion === null){
            try{
                self::$conexion = new mysqli(self::$server, self::$usuario, self::$pass, self::$bdName);
            }catch(Exception $ex){
                if(self::$conexion->connect_errno){
                    die("Error conexion con BD" . self::$conexion->connect_error);
                }else{
                    die("Error" . $ex->getMessage());
                }
            }
        }

        return self::$conexion;
    }
}
    


?>