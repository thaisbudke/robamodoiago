<?php $__env->startSection('content'); ?>
<h1> Editar Atletas <br><br>

<form action="/atletas/<?php echo e($atletas->id); ?>" method="POST">
	<?php echo e(csrf_field()); ?>

    <?php echo e(method_field('PUT')); ?>

	Nome: <input type="text" name="nome" id="nome" value="<?php echo e($atletas->nome); ?>">		<br>
	<input type="submit" value="salvar">
</form>
</h1> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/linuxifrs/Vídeos/Trabalho_Final_Laravel/resources/views/atletas/edit.blade.php ENDPATH**/ ?>