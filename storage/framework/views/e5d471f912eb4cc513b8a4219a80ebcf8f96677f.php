<?php $__env->startSection('content'); ?>

<h1> Lista de Atletas </h1>

<hr>
<?php $__currentLoopData = $atletas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $atletas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h2><a href="/atletas/<?php echo e($atletas->id); ?>"><?php echo e($atletas->nome); ?></a></h2><br>



<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<p class="h3"><a href="/eventos">Ver eventos</a></p>
<p class="h3"><a href="/esportes">Ver esportes</a></p>


<?php if(auth()->guard()->check()): ?>
<p class="h3"><a href="/atletas/create">Cadastrar Atleta</a></p>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/linuxifrs/Vídeos/Trabalho_Final_Laravel/resources/views/atletas/list.blade.php ENDPATH**/ ?>