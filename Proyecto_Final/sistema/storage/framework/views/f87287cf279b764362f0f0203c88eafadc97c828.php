<form action="<?php echo e(url('/usuario/'.$usuario->id)); ?>" method="post">

    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    <?php echo e(method_field('PATCH')); ?>

    <?php echo $__env->make('usuario.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</form>
<?php /**PATH C:\xampp\htdocs\pagina-desarrollo-web\Proyecto_Final\sistema\resources\views/usuario/edit.blade.php ENDPATH**/ ?>