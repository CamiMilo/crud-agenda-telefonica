<?php
$host = 'fra1.clusters.zeabur.com';  // Host del servidor de base de datos
$port = '31570';                     // Puerto de la base de datos
$user = 'root';                      // Usuario de la base de datos
$pass = '0kp8zeX31WKQtd24HbmZ6RqVs95o7hwc';  // Contraseña del usuario
$db = 'agenda_db';                      // Nombre de la base de datos

// Crear la conexión
$conn = new mysqli($host, $user, $pass, $db, $port);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>