<h1> Deletar 

			<form action="/atletas/<?php echo e($atletas->id); ?>" method="POST">
				<?php echo e(csrf_field()); ?>

				<?php echo e(method_field('DELETE')); ?>

				<p>Você realmente deseja excluir o registro: <?php echo e($atletas->nome); ?>?</p>
				<input type="submit" value="Deletar">
			</form>
			<br>
			<br>
			<br>
		</div>
	</div><?php /**PATH /home/linuxifrs/Área de Trabalho/Trabalho_Final_Laravel/resources/views/atletas/delete.blade.php ENDPATH**/ ?>