<?php
include 'conexion.php';

if(isset($_POST['id']) && isset($_POST['nombre'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    
    // Vulnerable a propósito para la tarea
    $query = "UPDATE usuarios SET nombre = '$nombre' WHERE id = $id";
    $conexion->exec($query);
}

header("Location: index.php");
?>