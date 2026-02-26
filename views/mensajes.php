<?php if($mensaje): ?>
<div class="alert ok"><?= $mensaje ?></div>
<?php endif; ?>

<?php if($error): ?>
<div class="alert err"><?= $error ?></div>
<?php endif; ?>