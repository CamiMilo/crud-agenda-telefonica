<?php
include 'config.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "DELETE FROM contactos WHERE id = $id";

  if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    exit();
  } else {
    echo "Error al eliminar el contacto: " . $conn->error;
  }
}
$conn->close();
?>
