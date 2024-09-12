<?php
include 'config.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "SELECT * FROM contactos WHERE id = $id";
  $result = $conn->query($sql);
  $contacto = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST['id'];
  $nombre = $_POST['nombre'];
  $telefono = $_POST['telefono'];
  $email = $_POST['email'];

  $sql = "UPDATE contactos SET nombre='$nombre', telefono='$telefono', email='$email' WHERE id=$id";
  if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    exit();
  } else {
    echo "Error: " . $conn->error;
  }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Editar Contacto</title>
  <!-- styles -->
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Editar Contacto</h1>
  <form action="edit.php" method="POST">
    <input type="hidden" name="id" value="<?= $contacto['id'] ?>">
    <label>Nombre: </label>
    <input type="text" name="nombre" value="<?= $contacto['nombre'] ?>" required><br>
    <label>Teléfono: </label>
    <input type="text" name="telefono" value="<?= $contacto['telefono'] ?>" required><br>
    <label>Email: </label>
    <input type="email" name="email" value="<?= $contacto['email'] ?>" required><br>
    <input type="submit" value="Actualizar">
  </form>
</body>
</html>
