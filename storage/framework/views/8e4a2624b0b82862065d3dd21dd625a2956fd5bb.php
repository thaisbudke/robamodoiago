<?php $__env->startSection('content'); ?>
<h1> Lista de Eventos </h1>

<hr>
<?php $__currentLoopData = $eventos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eventos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h2>

    <p class="h3"><a href="/eventos/<?php echo e($eventos->id); ?>"><?php echo e($eventos->titulo); ?></a></p>
    <p><?php echo e($eventos->local); ?></p>
    </h2>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/linuxifrs/Música/Trabalho_Final_Laravel/resources/views/eventos/list.blade.php ENDPATH**/ ?>