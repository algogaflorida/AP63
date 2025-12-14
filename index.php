<?php
require_once 'autoloader.php';
$gestor = new Audioteca();

for ($i = 1; $i <= 50; $i++) {
    $disco = new Disco("Disco $i", "Artista $i", "Género $i", $i * 10, $i);
    $gestor->agregarPista($disco);
}

$gestor->actualizarPista(10, "Nuevo Disco 10", 99);
$gestor->actualizarPista(20, "Nuevo Disco 20", 99);

$gestor->eliminarPista(30);
$gestor->eliminarPista(40);

$discos = $gestor->obtenerPistas();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Audioteca - Listado de Discos</title>
</head>
<body>

<h2>Listado de discos de la audioteca</h2>

<?php if (empty($discos)): ?>
    <p>No hay discos en la audioteca.</p>
<?php else: ?>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Artista</th>
        <th>Género</th>
        <th>Precio</th>
    </tr>

    <?php foreach ($discos as $d): ?>
    <tr>
        <td><?= $d->getId() ?></td>
        <td><?= $d->getTitulo() ?></td>
        <td><?= $d->getArtista() ?></td>
        <td><?= $d->getGenero() ?></td>
        <td><?= $d->getPrecio() ?> €</td>
    </tr>
    <?php endforeach; ?>
</table>

<?php endif; ?>

</body>
</html>
