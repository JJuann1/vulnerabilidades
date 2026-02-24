<?php
include 'conexion.php';

if (!empty($_POST['nombre'])) {
    $stmt = $conexion->prepare("INSERT INTO usuarios (nombre) VALUES (:nombre)");
    
    $stmt->bindValue(':nombre', $_POST['nombre'], SQLITE3_TEXT);
    
    $stmt->execute();
}

header("Location: index.php");
?>