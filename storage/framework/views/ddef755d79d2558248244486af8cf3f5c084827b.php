<?php $__env->startSection('content'); ?>
<h1> Criar Esportes <br><br>

<form action="/esportes" method="post">
	<?php echo e(csrf_field()); ?>

	Nome: <input type="text" name="nome">				<br>
	Descricao: <input type="text" name="descricao">					<br>
	Data: <input type="datetime-local" name="data">			<br>
    Genero: <input type="text" name="genero">					<br>
    Resultado: <input type="text" name="resultado">					<br>
	Evento: <select name='evento_id'>
			<?php $__currentLoopData = $eventos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $evento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo e($evento->id); ?>"><?php echo e($evento->titulo); ?></option>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</select><br>


	<input type="submit" value="salvar">
</form>
</h1> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/linuxifrs/Vídeos/Trabalho_Final_Laravel/resources/views/esportes/create.blade.php ENDPATH**/ ?>