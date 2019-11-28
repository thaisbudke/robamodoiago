<h1> Editar Atletas <br><br>

<form action="/atletas/<?php echo e($atletas->id); ?>" method="POST">
	<?php echo e(csrf_field()); ?>

    <?php echo e(method_field('PUT')); ?>

	Nome: <input type="text" name="nome" id="nome" value="<?php echo e($atletas->nome); ?>">		<br>
	<input type="submit" value="salvar">
</form>
</h1> 
<?php /**PATH /home/linuxifrs/Downloads/Trabalho_Final_Laravel/Trabalho_Final_Laravel/resources/views/atletas/edit.blade.php ENDPATH**/ ?>