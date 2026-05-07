<?php
include 'db.php';

$result = $conn->query("SELECT * FROM articulos");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Artículos</title>
</head>
<body>
    <h1>Gestión de Artículos</h1>
    <a href="crear.php">Crear nuevo artículo</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Marca</th>
                <th>Cantidad</th>
                <th>Bodega</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['nombre'] ?></td>
                    <td><?= $row['marca'] ?></td>
                    <td><?= $row['cantidad'] ?></td>
                    <td><?= $row['bodega'] ?></td>
                    <td>
                        <a href="editar.php?id=<?= $row['id'] ?>">Editar</a>
                        <a href="eliminar.php?id=<?= $row['id'] ?>" onclick="return confirm('¿Estás seguro?')">Eliminar</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>