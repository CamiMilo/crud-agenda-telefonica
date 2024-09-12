<?php
$host = "localhost";  // Cambia esto si es necesario
$user = "root";       // Usuario de MySQL
$pass = "";           // Contraseña de MySQL
$db = "agenda_db";    // Nombre de la base de datos

$conn = new mysqli($host, $user, $pass, $db);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>