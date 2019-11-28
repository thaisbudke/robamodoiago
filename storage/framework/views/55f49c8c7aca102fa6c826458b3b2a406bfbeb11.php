<?php $__env->startSection('content'); ?>

<h1> Criar Atletas <br><br>

<form action="/atletas" method="post">
	<?php echo e(csrf_field()); ?>


	Nome: <input type="text" name="nome">	<br><br>
	Esporte:<select name='esportes_id'>
				<?php $__currentLoopData = $esportes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $esportes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo e($esportes->id); ?>"><?php echo e($esportes->nome); ?></option>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				

	</select><br><br>

	<input type="submit" value="salvar">
</form>
</h1> 

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/linuxifrs/Área de Trabalho/Trabalho_Final_Laravel/resources/views/atletas/create.blade.php ENDPATH**/ ?>