<h1>Editar Eventos <br><br>

<form action="/eventos/<?php echo e($eventos->id); ?>" method="POST">
	<?php echo e(csrf_field()); ?>

    <?php echo e(method_field('PUT')); ?>

	Titulo: <input type="text" name="titulo" value="<?php echo e($eventos->titulo); ?>">				<br>
	Local: <input type="text" name="local" value="<?php echo e($eventos->local); ?>">					<br>
	Data: <input type="datetime-local" name="data" value="<?php echo e($eventos->data); ?>">			<br>
	<input type="submit" value="salvar">
</form>
</h1> <?php /**PATH /home/linuxifrs/Downloads/Trabalho_Final_Laravel/Trabalho_Final_Laravel/resources/views/eventos/edit.blade.php ENDPATH**/ ?>