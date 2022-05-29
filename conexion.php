<?php
//
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alumno_1";

// Crea la conexion
$conn = 
mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($conn,'utf8');


// Checa connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Elimna los mensajes de warning 
//error_reporting(0);

?>