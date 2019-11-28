<?php $__env->startSection('content'); ?>
<h1> Lista de Eventos </h1>

<hr>
<?php $__currentLoopData = $eventos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eventos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h2>

    <p class="h3"><a href="/eventos/<?php echo e($eventos->id); ?>"><?php echo e($eventos->titulo); ?></a></p>
    <p><?php echo e($eventos->local); ?></p>
    <p><?php echo e(\Carbon\Carbon::parse($eventos->data)->format('d/m/Y h:m')); ?></p>
    <br><br>
    </h2>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<p class="h3"><a href="/esportes">Ver esportes</a></p>
<p class="h3"><a href="/atletas">Ver atletas</a></p>


<?php if(auth()->guard()->check()): ?>
<p class="h3"><a href="/eventos/create">Criar evento</a></p>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/linuxifrs/Vídeos/Trabalho_Final_Laravel/resources/views/eventos/list.blade.php ENDPATH**/ ?>