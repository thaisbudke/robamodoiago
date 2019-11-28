<h1> Lista de Eventos </h1>

<hr>
<?php $__currentLoopData = $eventos->eventos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eventos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        	        <tr>
        	            <td><?php echo e($eventos->id); ?></td>
                        <td><?php echo e($eventos->titulo); ?></td>
                        <td><?php echo e($eventos->local); ?></td>
                        <td><?php echo e($eventos->data); ?></td>
        	            <td><a href="/eventos/<?php echo e($eventos->id); ?>"><?php echo e($eventos->titulo); ?></a></td>
        	        </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__currentLoopData = $eventos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eventos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h2><?php echo e($eventos->id); ?><h2>
    <p><?php echo e($eventos->titulo); ?></p>
    <p><?php echo e($eventos->local); ?></p>
    <p><?php echo e($eventos->data); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/linuxifrs/Música/Trabalho_Final_Laravel/resources/views/eventos/show.blade.php ENDPATH**/ ?>