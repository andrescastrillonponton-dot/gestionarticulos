<?php
$host = "mysql-dcosof.alwaysdata.net"; // Servidor de la base de datos
$user = "dcosof_uevosarticulos";       // Usuario de la base de datos
$password = "clase1234";               // Contraseña del usuario
$dbname = "dcosof_uevosarticulos";     // Nombre de la base de datos

$conn = new mysqli($host, $user, $password, $dbname);

// Verificar si la conexión fue exitosa
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>