<?php
include 'conexion.php';
$n = $_POST['nombre'];
$conexion->exec("INSERT INTO usuarios (nombre) VALUES ('$n')");
header("Location: index.php");
?>