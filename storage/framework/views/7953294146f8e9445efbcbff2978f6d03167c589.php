<h1> Lista de Eventos </h1>

<hr>
<?php $__currentLoopData = $esportes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $esportes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p><a href="/esportes/<?php echo e($esportes->id); ?>"><?php echo e($esportes->nome); ?></a></p>
    <p><?php echo e($esportes->descricao); ?></p>
    <p><?php echo e(\Carbon\Carbon::parse($esportes->data)->format('d/m/Y h:m')); ?></p>
    <p><?php echo e($esportes->genero); ?></p>
    <h2><?php echo e($esportes->resultado); ?><h2><br><br>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/linuxifrs/Downloads/Trabalho_Final_Laravel/Trabalho_Final_Laravel/resources/views/esportes/list.blade.php ENDPATH**/ ?>