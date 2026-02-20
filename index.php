<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD Juan - Entrega</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2 class="text-center mb-4">Registro de Usuarios (Vulnerable)</h2>
    
    <form action="insertar.php" method="POST" class="card p-3 mb-4 shadow-sm">
        <div class="input-group">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre completo" required>
            <button type="submit" class="btn btn-primary">Guardar Registro</button>
        </div>
    </form>

    <table class="table table-white shadow-sm">
        <thead class="table-dark"><tr><th>ID</th><th>Nombre</th><th>Acciones</th></tr></thead>
        <tbody>
            <?php
            $res = $conexion->query("SELECT * FROM usuarios");
            while($f = $res->fetchArray()){ ?>
            <tr>
                <td><?php echo $f['id']; ?></td>
                <td><?php echo $f['nombre']; ?></td>
                <td>
                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#edit<?php echo $f['id']; ?>">Editar</button>
                    <a href="eliminar.php?id=<?php echo $f['id']; ?>" class="btn btn-danger btn-sm">Eliminar</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php
$res2 = $conexion->query("SELECT * FROM usuarios");
while($f2 = $res2->fetchArray()){ ?>
<div class="modal fade" id="edit<?php echo $f2['id']; ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <form action="editar.php" method="POST" class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Actualizar Nombre</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="id" value="<?php echo $f2['id']; ?>">
                <input type="text" name="nombre" class="form-control" value="<?php echo $f2['nombre']; ?>" required>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Actualizar Cambios</button>
            </div>
        </form>
    </div>
</div>
<?php } ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>