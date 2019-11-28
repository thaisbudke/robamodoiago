<?php $__env->startSection('content'); ?>
<h1> Lista de Atletas 

<hr>
                <h1>
        	        <tr>
        	            <td><?php echo e($atletas->id); ?></td><br><br>
                        <td><?php echo e($atletas->nome); ?></td><br><br>

                        <?php if(auth()->guard()->check()): ?>
                        <td><a href="/atletas/<?php echo e($atletas->id); ?>/edit">Editar</a></td><br><br>
                        <td><a href="/atletas/<?php echo e($atletas->id); ?>/delete">Excluir</a></td>
                        <?php endif; ?>

        	        </tr>
                </h1>
                
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/linuxifrs/Vídeos/Trabalho_Final_Laravel/resources/views/atletas/show.blade.php ENDPATH**/ ?>