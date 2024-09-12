<?php
$host = 'fra1.clusters.zeabur.com';  // Host del servidor de base de datos
$port = '30603';                     // Puerto de la base de datos
$user = 'root';                      // Usuario de la base de datos
$pass = 'dHbG17Z8ohVE2C0RO6eK3SY49MDi5jnc';  // Contraseña del usuario
$db = 'zeabur';                      // Nombre de la base de datos

// Crear la conexión
$conn = new mysqli($host, $user, $pass, $db, $port);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "Conexión exitosa";
?>