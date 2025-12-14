<?php
require_once "autoload.php";

$gestor = new GestorProducto();
//Agregamos 50 productos
for ($i=1;$i<=50;$i++){
    $producto = new Disco($i, "Disco$i", $i*10);
    $gestor->agregar($producto);
}

//Actualizamos 2 productos
$gestor->actualizar(10, "nuevoDisco10", 99);
$gestor->actualizar(20, "nuevoDisco20", 99);

//Eliminamos 2 productos
$gestor->eliminar(30);
$gestor->eliminar(40);

//Listamos
$productos = $gestor->listar();
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD PHP con POO y Arrays</title>
</head>
<body>

<!-- LISTADO -->
<h2>Listado de discos</h2>

<?php if (empty($productos)): ?>
    <p>No hay productos aún.</p>
<?php else: ?>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
    </tr>

    <?php foreach ($productos as $p): ?>
    <tr>
        <td><?= $p->getId() ?></td>
        <td><?= $p->getNombre() ?></td>
        <td><?= $p->getPrecio() ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<?php endif; ?>

</body>
</html>