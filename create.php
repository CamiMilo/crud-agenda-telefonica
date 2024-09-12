<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST['nombre'];
  $telefono = $_POST['telefono'];
  $email = $_POST['email'];

  $sql = "INSERT INTO contactos (nombre, telefono, email) VALUES ('$nombre', '$telefono', '$email')";
  if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Agregar Contacto</title>
  <!-- styles -->
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Agregar Contacto</h1>
  <form action="create.php" method="POST">
    <label>Nombre: </label>
    <input type="text" name="nombre" required><br>
    <label>Teléfono: </label>
    <input type="text" name="telefono" required><br>
    <label>Email: </label>
    <input type="email" name="email" required><br>
    <input type="submit" value="Agregar">
  </form>
</body>
</html>
