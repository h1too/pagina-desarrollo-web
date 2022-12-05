
<a href="<?php echo e(url('/usuario/create')); ?>">Registrar nuevo usuario</a>

<table class="table table-ligth">

    <thead class="thead-ligth">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Direccion</th>
            <th>Numero de contacto</th>
            <th>Correo</th>
            <th>RUT</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($usuario->id); ?></td>
            <td><?php echo e($usuario->nombre); ?></td>
            <td><?php echo e($usuario->apellido); ?></td>
            <td><?php echo e($usuario->direccion); ?></td>
            <td><?php echo e($usuario->Ncontacto); ?></td>
            <td><?php echo e($usuario->correo); ?></td>
            <td><?php echo e($usuario->rut); ?></td>
            <td> 

            <a href="<?php echo e(url('/usuario/'.$usuario->id.'/edit')); ?>">
                Editar 
            </a>

            <form action="<?php echo e(url('/usuario/'.$usuario->id)); ?>" method="POST">

                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

                <?php echo e(method_field('DELETE')); ?>


                <input type="submit" onclick="return confirm('¿Real mente quieres borrar este usuario?')"
                value="Borrar">
            </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>

</table><?php /**PATH C:\xampp\htdocs\pagina-desarrollo-web\Proyecto_Final\sistema\resources\views/usuario/cuenta.blade.php ENDPATH**/ ?>