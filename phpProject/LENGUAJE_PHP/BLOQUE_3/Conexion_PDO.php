<?php
$server = "localhost";
$userName = "root";
$pass = "";
$db = "ies_bd";

//CONEXION PDO
$conexion = new PDO("mysql:host=$server;dbname=$db;charset=utf8",$userName,$pass);

//CONFIGURACION DE PROPIEDADES
//Manejo de errores con excepciones
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//Se puede configurar el modo recuperacion predeterminado
$conexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

echo "Conexion realizada con exito. <br>";

echo "Version del servidor: " . $conexion->getAttribute(PDO::ATTR_SERVER_VERSION) . "<br>";
echo "Tipo de constrolador: " . $conexion->getAttribute(PDO::ATTR_DRIVER_NAME) . "<br>";

//OBTENER DATOS DE LA BD CON PDO
// $stmt = $conexion->query("SELECT * FROM alumnos");
// $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

// foreach($resultados as $fila){
//     echo "<pre>";
//     print_r($fila);
//     echo "</pre>";
// }

//OBTENER DATOS DE LA BD CON PDO
$stmt = $conexion->query("SELECT * FROM alumnos");
$resultados = $stmt->fetchAll(PDO::FETCH_BOTH);

foreach($resultados as $fila){
    echo "<pre>";
    print_r($fila);
    echo "</pre>";
}

//TRANSACCIONES
try{
    $conexion->beginTransaction();

    //ejecutas consulta 1
    $stmt = $conexion->prepare("UPDATE profesores SET telefono = ? WHERE Id = ?");
    $stmt->execute(['888888888',1]);

    //ejecutas consulta 2
    $stmt = $conexion->prepare("UPDATE profesores SET telefono = ? WHERE Id = ?");
    $stmt->execute(['777777777',1]);

    //Confirmmo cambios
    $conexion->commit();

}catch(Exception $ex){
    //Revertimos cambios en caso de error
    $conexion->rollBack();
    echo "<br>Error en la transaccion. Rollback realizado " . $ex->getMessage() . "<br>";
}

//CONSULTAS PREPARADAS
//ejemplo utilizando ?
echo "Consulta Preparada con ? <br>";
$stmt2 = $conexion->prepare("INSERT INTO profesores (nombre, asignatura) VALUES (?,?)");
$nombre = "Manolo";
$asignatura = "Matematicas";
$stmt2->bindParam(1,$nombre);
$stmt2->bindParam(2,$asignatura);
$stmt2->execute();

echo "Profesor " . $nombre . "de la asignatura" . $asignatura . "insertado en BD correctamente";

//ejemplo utilizando etiquetas
echo "Consulta Preparada con etiquetas<br>";
$stmt3 = $conexion->prepare("INSERT INTO profesores (nombre, asignatura) VALUES (:nombreProfesor,:asignatura)");

$nombre = "Pedro";
$asignatura = "Física";
$stmt3->bindParam(':nombreProfesor',$nombre);
$stmt3->bindParam(':asignatura', $asignatura);
$stmt3->execute();

$stmt4 = $conexion->prepare("INSERT INTO profesores (nombre, asignatura) VALUES (:nombreProfesor,:asignatura)");

$stmt4->execute([
'nombreProfesor' => "Antonio",
'asignatura' => "Historia"
]
)

?>