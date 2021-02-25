<?php
// import file with all clases
require 'clases.php';

$dsn = "pgsql:host=$host;port=5432;dbname=$db;user=$username;password=$password";
 
try{
 // create a PostgreSQL database connection
 $dbConn = new PDO($dsn);
 // display a message if connected to the PostgreSQL successfully
 if($dbConn){
 	echo "Connected to the <strong>$db</strong> database successfully!";
 }
}catch (PDOException $e){
 // report error message
 echo $e->message
 //stop execution
 throw $e;
}

$instanciaModelo=new Modelo($dbConn);

?>