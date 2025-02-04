<?php

/**
 * 3 APIS a la hora de considerar conectar a una Base de Datos MySQL
 * 
 * 1. MySQL. ATINGUA Y OBSOLETA
 * 2. MYSQLi: Extension mejorada de MySQL
 *      - METODO 1: Conexion ORIENTADO A OBJETOS.
 *      - METODO 2: Conexion Procedimental (Mediante funciones).
 * 
 * 3. PDO (Objetos de datos PHP): Proporciona una capa de abstraccion para el acceso a datos. 
 */

/*
1. Establecer conexion con BD.
2. Ejecutar sentencias SQL.
3. Obtendremos registros devueltos por sentencias SQL.
4. Transacciones.
5. Consultas preparadas.
6. Ejecutar procedimientos almacenados.
7. Gestionar los errores que se produzcan en la conexion.
8. Cerrar sesion.
*/

/**
 * Propiedades de configuracion que se enuentran en php.ini
 * 
 * 1. mysqli.allow_persistent: Permite crear conexiones persistentes.
 * 2. mysqli.reconnect = Indicar si queremos que se vuelva a conectar la conexion 
 * en caso de perderla.
 * 3. mysqli.default_port: Puerto por defecto al que se conectará.
 * 4. mysqli.default_host: Host por defecto al que se conectará.
 * 5. mysqli.default_user: Nombre de usuario por defecto a usar en la conexion.
 * 6. mysqli.default_pw: Password de usuario por defecto a usar en la conexion.
 */

?>