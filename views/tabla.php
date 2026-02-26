<div class="card">
<h3>Registros guardados</h3>
<table class="table">
<tr>
<th>ID</th><th>Nombre</th><th>Email</th><th>Teléfono</th><th>Acciones</th>
</tr>

<?php
$stmt = $conexion->query("SELECT * FROM perfiles ORDER BY id DESC");
foreach($stmt as $fila){
    echo "<tr>
        <td>{$fila['id']}</td>
        <td>{$fila['nombre']}</td>
        <td>{$fila['email']}</td>
        <td>{$fila['telefono']}</td>
        <td>
            <a class='action edit' href='?editar={$fila['id']}'>Editar</a>
            <a class='action delete' onclick=\"return confirm('¿Eliminar registro?')\" href='?eliminar={$fila['id']}'>Eliminar</a>
        </td>
    </tr>";
}
?>

</table>
</div>