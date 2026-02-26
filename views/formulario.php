<div class="card">
<h3><?= $editarData ? "Editar" : "Nuevo" ?> perfil</h3>

<form method="POST">
<input type="hidden" name="id" value="<?= $editarData['id'] ?? '' ?>">

<label>Nombre (solo letras)</label>
<input name="nombre" required pattern="[A-Za-záéíóúÁÉÍÓÚñÑ ]+"
value="<?= $editarData['nombre'] ?? '' ?>">

<label>Email</label>
<input name="email" type="email" required
value="<?= $editarData['email'] ?? '' ?>">

<label>Teléfono (obligatorio)</label>
<input name="telefono" required pattern="[0-9]+"
value="<?= $editarData['telefono'] ?? '' ?>">

<?php if($editarData): ?>
<button name="actualizar">Actualizar</button>
<a href="index.php" class="btn-cancel">Cancelar</a>
<?php else: ?>
<button name="crear">Guardar</button>
<?php endif; ?>

</form>
</div>