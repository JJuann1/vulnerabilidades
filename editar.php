<?php
include 'conexion.php';
$id = $_POST['id']; $n = $_POST['nombre'];
$conexion->exec("UPDATE usuarios SET nombre = '$n' WHERE id = $id");
header("Location: index.php");
?>