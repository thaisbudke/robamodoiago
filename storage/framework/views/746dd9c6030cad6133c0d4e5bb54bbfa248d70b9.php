<h1> Lista de Atletas </h1>

<hr>
<?php $__currentLoopData = $atletas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $atletas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h2><a href="/atletas/<?php echo e($atletas->id); ?>"><?php echo e($atletas->nome); ?></a></h2><br>



<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/linuxifrs/Downloads/Trabalho_Final_Laravel/Trabalho_Final_Laravel/resources/views/atletas/list.blade.php ENDPATH**/ ?>