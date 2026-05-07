<?php
include 'db.php';

// Verificar si se recibió el ID y los datos por POST
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $marca = $_POST['marca'];
    $cantidad = $_POST['cantidad'];
    $bodega = $_POST['bodega'];

    // Ejecutar la consulta para actualizar el artículo
    $conn->query("UPDATE articulos SET nombre = '$nombre', marca = '$marca', cantidad = $cantidad, bodega = '$bodega' WHERE id = $id");

    // Redirigir de vuelta a la página principal
    header('Location: index.php');
} else {
    // Si no se reciben los datos necesarios, redirigir a la página principal
    header('Location: index.php');
}
?>