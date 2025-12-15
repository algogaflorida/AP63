<?php
session_start();
require_once 'autoloader.php';

$gestor = new Audioteca();
$discos = $gestor->obtenerPistas();

$accion = $_GET['accion'] ?? null;

if ($accion === 'crear') {
    $disco = new Disco($tit, $art, $gen, $prec, $id);
    $gestor->agregarPista($disco);
    header("Location: index.php");
    exit;
} elseif ($accion === 'editar'){
    $gestor->actualizarPista($id, $titulo, $duracion);
    header("Location: index.php");
} elseif ($accion === 'eliminar') {
    $gestor->eliminarPista($id);
    header("Location: index.php");
}
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

<form method='POST' action='index.php?accion=crear'></form>
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
        <td>
            <form method='POST' action='index.php?accion=editar'>
                    <label for="id">ID</label><br>
                        <input type="text" id="identificador" name="id" required><p>
                    <label for="titulo">Título</label><br>
                        <input type="text" name="titulo" id="titulo" required><p>
                    <label for="duracion">Duración</label><br>
                        <input type="text" id="duracion" name="duracion" required><p>
            </form>

            <a href="index.php?accion=eliminar&id=<?= $d->getId() ?>">Eliminar</a>
    </tr>
    <?php endforeach; ?>
</table>
<?php
class Audioteca {

    public function __construct() {
        if (!isset($_SESSION['discos'])) {
            $_SESSION['discos'] = [];
        }
    }

    /* Añade una nueva pista a la audioteca */
    public function agregarPista($nuevaPista){
            $_SESSION['discos'][] = $nuevaPista;
    }
}
?>
<?php endif; ?>
</body>
</html>