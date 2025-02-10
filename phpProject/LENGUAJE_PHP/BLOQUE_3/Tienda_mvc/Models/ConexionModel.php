<?php

class ConexionModel{

    private static $server = "localhost";
    private static $usuario = "root";
    private static $pass = "";
    private static $bdName = "dwes";
    private static $conexion = null;

    public static function connect(){
        //Nos aseguramos de que no se va a acrear una conexion nueva
        //Solo tendremos 1 conexion simultanea
        if(self::$conexion === null){
            try{
                self::$conexion = new mysqli(self::$server, self::$usuario, self::$pass, self::$bdName);
                
            }catch(Exception $ex){
                if(self::$conexion->connect_errno){
                    // echo "Error de conexion: " . self::$conexion->connect_error;
                    // exit();

                    die("Error de conexion: " . self::$conexion->connect_error);
                }else{
                    echo "Error de conexion: " . $ex->getMessage();
                }
            }
            
        }

        //devolvemos la conexion creada
        //Si ya esta creada no hace falta volver a crearla
        return self::$conexion;
    }

}

?>