<?php $__env->startSection('content'); ?>
<h1> Lista de Esportes 

<hr>
                <h1>
        	        <tr>
        	            <td><?php echo e($esportes->id); ?></td><br><br>
                        <td><?php echo e($esportes->nome); ?></td><br><br>
                        <td><?php echo e($esportes->descricao); ?></td><br><br>
                        <td><?php echo e(\Carbon\Carbon::parse($esportes->data)->format('d/m/Y h:m')); ?></td><br><br>
                        
                        <?php if($esportes->genero == 'M'): ?>
                            <td>MASCULINO</td>
                        <?php else: ?>
                            <td>FEMININO</td> 
                        <?php endif; ?>   
                            
                        <br><br>
                        <td><?php echo e($esportes->resultado); ?></td><br><br>
                        
                        <td><?php echo e($esportes->evento->titulo); ?></td><br><br>

                        <?php if(auth()->guard()->check()): ?>
                        <td><a href="/esportes/<?php echo e($esportes->id); ?>/edit">Editar</a></td><br><br>
                        <td><a href="/esportes/<?php echo e($esportes->id); ?>/delete">Excluir</a></td><br><br>
                        <?php endif; ?>

        <table id="tabela" name="tabela"  class="table table-striped ">
            <thead>
               <tr>
                    <td>Nome</td>
                </tr>
            </thead>
            <tbody>
                    <?php $__currentLoopData = $esportes->atletas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $atletas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($atletas->nome); ?></td><br><br>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        	        </tr>
                </h1>
<?php $__env->stopSection(); ?>
                
           



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/linuxifrs/Vídeos/Trabalho_Final_Laravel/resources/views/esportes/show.blade.php ENDPATH**/ ?>