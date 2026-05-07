<?php
include 'db.php';

// Verificar si se recibió el ID por GET
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ejecutar la consulta para eliminar el artículo
    $conn->query("DELETE FROM articulos WHERE id = $id");

    // Redirigir de vuelta a la página principal
    header('Location: index.php');
} else {
    // Si no se recibe un ID, redirigir a la página principal
    header('Location: index.php');
}
?>