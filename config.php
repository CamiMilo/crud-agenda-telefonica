<?php
$host = 'fra1.clusters.zeabur.com';  // Host del servidor de base de datos
$port = '31234';                     // Puerto de la base de datos
$user = 'root';                      // Usuario de la base de datos
$pass = 'XbHORL0SIKl51hP9MYo86QD3u2V7pxA4';  // Contraseña del usuario
$db = 'agenda_db';                      // Nombre de la base de datos

// Crear la conexión
$conn = new mysqli($host, $user, $pass, $db, $port);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>