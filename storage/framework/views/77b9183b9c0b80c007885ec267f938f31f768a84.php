<?php $__env->startSection('content'); ?>
<h1> Deletar 

			<form action="/esportes/<?php echo e($esportes->id); ?>" method="POST">
				<?php echo e(csrf_field()); ?>

				<?php echo e(method_field('DELETE')); ?>

				<p>Você realmente deseja excluir o registro: <?php echo e($esportes->titulo); ?>?</p>
				<input type="submit" value="Deletar">
			</form>
			<br>
			<br>
			<br>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/linuxifrs/Vídeos/Trabalho_Final_Laravel/resources/views/esportes/delete.blade.php ENDPATH**/ ?>