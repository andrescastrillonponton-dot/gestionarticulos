<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $marca = $_POST['marca'];
    $cantidad = $_POST['cantidad'];
    $bodega = $_POST['bodega'];

    $conn->query("INSERT INTO articulos (nombre, marca, cantidad, bodega) VALUES ('$nombre', '$marca', $cantidad, '$bodega')");
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Artículo</title>
</head>
<body>
    <h1>Crear Artículo</h1>
    <form method="POST">
        <label>Nombre: <input type="text" name="nombre" required></label><br>
        <label>Marca: <input type="text" name="marca" required></label><br>
        <label>Cantidad: <input type="number" name="cantidad" required></label><br>
        <label>Bodega: <input type="text" name="bodega" required></label><br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>