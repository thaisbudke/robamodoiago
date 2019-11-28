<?php $__env->startSection('content'); ?>

<h1> Criar Eventos <br><br>

<form action="/eventos" method="post">
	<?php echo e(csrf_field()); ?>

	Titulo: <input type="text" name="titulo">				<br>
	Local: <input type="text" name="local">					<br>
	Data: <input type="datetime-local" name="data">			<br>
	<input type="submit" value="salvar">
</form>
</h1> 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/linuxifrs/Área de Trabalho/Trabalho_Final_Laravel/resources/views/eventos/create.blade.php ENDPATH**/ ?>