<?php
require_once("Usuario.php");
require_once("Incidencia.php");
require_once("EstadoIncidencia.php");

$host = "localhost";
$port = "5432";
$user = "postgres";
$passw = "Dalarna1!";
$db = "ticketing";
$dsn = "pgsql:host=$host;port=$port;dbname=$db;user=$user;password=$passw";


try{
    // create a PostgreSQL database connection
	global $conn;
    $conn = new PDO($dsn);
	$conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	die("Error al conectar a la base de datos:" . $e->getMessage());
}

function getUsuarioLoginMedianteNifClave($nif,$clave){
    global $conn;
	$stmt = $conn->prepare("SELECT id FROM usuario WHERE nif=? AND clave=?");
	$stmt->execute([$nif,$clave]);

    $idUsuario=null;
    if($filaUnica = $stmt->fetch(PDO::FETCH_ASSOC)){
        $idUsuario=$filaUnica["id"];
    }
    
    return getUsuario($idUsuario);
}

function getUsuario($idUsuario){
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM usuario WHERE id=?");
	$stmt->execute([$idUsuario]);

    $usuario=null;
    if($filaUnica = $stmt->fetch(PDO::FETCH_ASSOC)){
        $usuario=new Usuario($filaUnica["id"],$filaUnica["nif"],$filaUnica["usuario"],$filaUnica["email"],$filaUnica["clave"]);
    }
    
    return $usuario;
}

function getIncidenciasUsuario($idUsuario) {
	global $conn;
	/* crea un array de objetos personaConsultada para mostrar el resultado de las consultas*/
	$stmt = $conn->prepare("SELECT * FROM incidencia WHERE id_usuario=?");
	$stmt->execute([$idUsuario]);
	$arrayIncidencias = [];
	while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
		$arrayIncidencias[]= new Incidencia( $fila["id"],$fila["id_usuario"],$fila["prioridad"],$fila["timestamp_creacion"],$fila["descripcion"],$fila["server"]);
	}
	return $arrayIncidencias;
} 

function getEstadosIncidencia($idIncidencia) {
	global $conn;
	/* crea un array de objetos estado Incidencia para mostrar el resultado de las consultas*/
	$stmt = $conn->prepare("SELECT * FROM estado_incidencia WHERE id_incidencia = ?");
    $stmt->execute([$idIncidencia]);
	$arrayEstadosIncidencia = [];
	while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
		$arrayEstadosIncidencia[]= new EstadoIncidencia($idIncidencia, $fila["estado"], $fila["timestamp_estado"]);
	}
	return $arrayEstadosIncidencia;
}

?>
