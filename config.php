<?php
$host = "fra1.clusters.zeabur.com";  // Cambia esto si es necesario
$user = "root";       // Usuario de MySQL
$pass = "dHbG17Z8ohVE2C0RO6eK3SY49MDi5jnc";           // Contraseña de MySQL
$db = "agenda_db";    // Nombre de la base de datos

$conn = new mysqli($host, $user, $pass, $db);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>