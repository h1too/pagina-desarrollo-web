<form action="<?php echo e(url('/usuario')); ?>" method="POST" enctype="multipart/form-data">
    
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    <?php echo $__env->make('usuario.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</form><?php /**PATH C:\xampp\htdocs\pagina-desarrollo-web\Proyecto_Final\sistema\resources\views/usuario/create.blade.php ENDPATH**/ ?>