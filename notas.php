<?php
// Conectar a la base de datos SQLite
$db = new PDO('sqlite:/var/www/html/notas.db');

// Consultar las notas de los estudiantes
$query = $db->query('SELECT * FROM estudiantes');
$estudiantes = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas de Estudiantes</title>
</head>
<body>
    <h1>Notas de Estudiantes</h1>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Nota</th>
        </tr>

        <?php foreach ($estudiantes as $estudiante): ?>
            <tr>
                <td><?php echo htmlspecialchars($estudiante['nombre']); ?></td>
                <td><?php echo htmlspecialchars($estudiante['nota']); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
