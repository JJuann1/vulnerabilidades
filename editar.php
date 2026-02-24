<?php
include 'conexion.php';

if (!empty($_POST['id']) && !empty($_POST['nombre'])) {
    $stmt = $conexion->prepare("UPDATE usuarios SET nombre = :nombre WHERE id = :id");
    
    $stmt->bindValue(':nombre', $_POST['nombre'], SQLITE3_TEXT);
    $stmt->bindValue(':id', $_POST['id'], SQLITE3_INTEGER);
    
    $stmt->execute();
}

header("Location: index.php");
?>