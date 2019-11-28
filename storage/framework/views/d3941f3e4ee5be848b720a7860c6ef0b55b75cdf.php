<!doctype html>
<html>
    <head>
        <?php echo $__env->make('include.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </head>
    <body>
        
        <?php echo $__env->make('include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        <br>
        <div class="container">
                <?php echo $__env->yieldContent('content'); ?>
        </div>

        <div class="container-fluid">
            <footer class="row">
                <?php echo $__env->make('include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </footer>
        </div>

        <!-- Scripts -->
        <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
        <?php echo $__env->yieldContent('javascript'); ?>
    </body>
</html><?php /**PATH /home/linuxifrs/Música/Trabalho_Final_Laravel/resources/views/layouts/app.blade.php ENDPATH**/ ?>