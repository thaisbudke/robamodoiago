<h1> Editar Esportes <br><br>

<form action="/esportes/<?php echo e($esportes->id); ?>" method="POST">
	<?php echo e(csrf_field()); ?>

    <?php echo e(method_field('PUT')); ?>

	Nome: <input type="text" name="nome" id="nome" value="<?php echo e($esportes->nome); ?>">		<br>
	Descricao: <input type="text" name="descricao" id="descricao" value="<?php echo e($esportes->descricao); ?>">		<br>
	Data: <input type="datetime-local" name="data" id="data" value="<?php echo e($esportes->data); ?>">	<br>
    Genero: <input type="text" name="genero" id="genero" value="<?php echo e($esportes->genero); ?>">		<br>
    Resultado: <input type="text" name="resultado" id="resultado" value="<?php echo e($esportes->resultado); ?>">		<br>
	Evento: <select name='evento_id' id="evento_id" value="<?php echo e($esportes->evento_id); ?>"> 	<br>
			<?php $__currentLoopData = $eventos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $evento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo e($evento->id); ?>"><?php echo e($evento->titulo); ?></option>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<input type="submit" value="salvar">
</form>
</h1> 
<?php /**PATH /home/linuxifrs/Área de Trabalho/Trabalho_Final_Laravel/resources/views/esportes/edit.blade.php ENDPATH**/ ?>