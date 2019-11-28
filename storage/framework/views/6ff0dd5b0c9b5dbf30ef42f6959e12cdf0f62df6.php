<?php $__env->startSection('content'); ?>
<h1> Lista de Eventos 

<hr>
                <h1>
        	        <tr>
        	            <td><?php echo e($eventos->id); ?></td><br><br>
                        <td><?php echo e($eventos->titulo); ?></td><br><br>
                        <td><?php echo e($eventos->local); ?></td><br><br>
                        <td><?php echo e(\Carbon\Carbon::parse($eventos->data)->format('d/m/Y h:m')); ?></td><br><br>
        	            <td><?php echo e($eventos->titulo); ?></a></td><br><br>

                        <?php if(auth()->guard()->check()): ?>
                        <td><a href="/eventos/<?php echo e($eventos->id); ?>/edit">Editar</a></td><br><br>
                        <td><a href="/eventos/<?php echo e($eventos->id); ?>/delete">Excluir</a></td>
                        <?php endif; ?>

        	        </tr>

                    <p>Esportes Relacionados:</p>
        <table id="tabela" name="tabela"  class="table table-striped ">
            <thead>
               <tr>
                    <td>Nome</td>
                    <td>Resultado</td>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $eventos->esportes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $esportes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        	        <tr>
        	            <td><a href="/esportes/<?php echo e($esportes->id); ?>"><?php echo e($esportes->nome); ?></a></td>
        	            <td><?php echo e($esportes->resultado); ?></td>
        	        </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </h1>
<?php $__env->stopSection(); ?>
            

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/linuxifrs/Área de Trabalho/Trabalho_Final_Laravel/resources/views/eventos/show.blade.php ENDPATH**/ ?>