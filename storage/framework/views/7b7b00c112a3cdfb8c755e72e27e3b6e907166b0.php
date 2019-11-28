<?php $__env->startSection('content'); ?>

<h1> Lista de Eventos </h1>
<hr>

<?php $__currentLoopData = $esportes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $esportes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p><a href="/esportes/<?php echo e($esportes->id); ?>"><?php echo e($esportes->nome); ?></a></p>
    <p><?php echo e($esportes->descricao); ?></p>
    <p><?php echo e(\Carbon\Carbon::parse($esportes->data)->format('d/m/Y h:m')); ?></p>
    <p><?php echo e($esportes->genero); ?></p>
    <h2><?php echo e($esportes->resultado); ?><h2><br><br>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<p class="h3"><a href="/eventos">Ver eventos</a></p>
<p class="h3"><a href="/atletas">Ver atletas</a></p>

<?php if(auth()->guard()->check()): ?>
<p class="h3"><a href="/esportes/create">Criar esporte</a></p>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/linuxifrs/Vídeos/Trabalho_Final_Laravel/resources/views/esportes/list.blade.php ENDPATH**/ ?>