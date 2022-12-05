<label for="nombre">Nombre</label>
<input type="text" name="nombre" value="<?php echo e(isset($usuario->nombre)?$usuario->nombre:''); ?>" id="nombre">
<br>

<label for="apellido">Apellido</label>
<input type="text" name="apellido" value="<?php echo e(isset($usuario->apellido)?$usuario->nombre:''); ?>" id="apellido">
<br>

<label for="direccion">Direccion</label>
<input type="text" name="direccion" value="<?php echo e(isset($usuario->direccion)?$usuario->direccion:''); ?>" id="direccion">
<br>
<label for="correo">Correo</label>
<input type="text" name="correo" value="<?php echo e(isset($usuario->correo)?$usuario->correo:''); ?>" id="correo">
<br>

<label for="Ncontacto">Numero de contacto</label>
<input type="text" name="Ncontacto" value="<?php echo e(isset($usuario->Ncontacto)?$usuario->Ncontacto:''); ?>" id="Ncontacto">
<br>

<label for="rut">RUT</label>
<input type="text" name="rut" value="<?php echo e(isset($usuario->rut)?$usuario->rut:''); ?>" id="rut">
<br>

<input type="submit" value="Guardar datos">

<a href="<?php echo e(url('usuario/')); ?>">Regresar</a>

<br><?php /**PATH C:\xampp\htdocs\pagina-desarrollo-web\Proyecto_Final\sistema\resources\views/usuario/form.blade.php ENDPATH**/ ?>