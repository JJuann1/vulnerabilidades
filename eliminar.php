<?php
include 'conexion.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['id'])) {
    $id = $_POST['id'];
    
    $stmt = $conexion->prepare("DELETE FROM usuarios WHERE id = :id");
    $stmt->bindValue(':id', $id, SQLITE3_INTEGER);
    $stmt->execute();
}

header("Location: index.php");
?>