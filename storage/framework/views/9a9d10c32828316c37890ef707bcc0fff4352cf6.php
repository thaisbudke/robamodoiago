<h1> Lista de Atletas 

<hr>
                <h1>
        	        <tr>
        	            <td><?php echo e($atletas->id); ?></td><br><br>
                        <td><?php echo e($atletas->nome); ?></td><br><br>
                        <td><a href="/atletas/<?php echo e($atletas->id); ?>/edit">Editar</a></td><br><br>
                        <td><a href="/atletas/<?php echo e($atletas->id); ?>/delete">Excluir</a></td>
        	        </tr>
                </h1>
                
           <?php /**PATH /home/linuxifrs/Downloads/Trabalho_Final_Laravel/Trabalho_Final_Laravel/resources/views/atletas/show.blade.php ENDPATH**/ ?>