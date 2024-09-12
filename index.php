<?php
include 'config.php';

$sql = "SELECT * FROM contactos";
$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Agenda Telefónica</title>

  <!-- styles -->
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Agenda Telefónica</h1>
  <a href="create.php">Agregar nuevo contacto</a>
  <table border="1">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Teléfono</th>
        <th>Email</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php while($row = $result->fetch_assoc()): ?>
        <tr>
          <td><?= $row['id'] ?></td>
          <td><?= $row['nombre'] ?></td>
          <td><?= $row['telefono'] ?></td>
          <td><?= $row['email'] ?></td>
          <td>
            <a href="edit.php?id=<?= $row['id'] ?>">Editar</a> |
            <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('¿Estás seguro?')">Eliminar</a>
          </td>
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</body>
</html>