<?php
$conexion = new SQLite3('datos.db');

// Crea la tabla si no existe
$conexion->exec("CREATE TABLE IF NOT EXISTS usuarios (
    id INTEGER PRIMARY KEY AUTOINCREMENT, 
    nombre TEXT NOT NULL
)");
?>