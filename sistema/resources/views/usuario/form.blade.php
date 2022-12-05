<label for="nombre">Nombre</label>
<input type="text" name="nombre" value="{{ isset($usuario->nombre)?$usuario->nombre:'' }}" id="nombre">
<br>

<label for="apellido">Apellido</label>
<input type="text" name="apellido" value="{{ isset($usuario->apellido)?$usuario->nombre:'' }}" id="apellido">
<br>

<label for="direccion">Direccion</label>
<input type="text" name="direccion" value="{{ isset($usuario->direccion)?$usuario->direccion:'' }}" id="direccion">
<br>
<label for="correo">Correo</label>
<input type="text" name="correo" value="{{ isset($usuario->correo)?$usuario->correo:'' }}" id="correo">
<br>

<label for="Ncontacto">Numero de contacto</label>
<input type="text" name="Ncontacto" value="{{ isset($usuario->Ncontacto)?$usuario->Ncontacto:'' }}" id="Ncontacto">
<br>

<label for="rut">RUT</label>
<input type="text" name="rut" value="{{ isset($usuario->rut)?$usuario->rut:''}}" id="rut">
<br>

<input type="submit" value="Guardar datos">

<a href="{{ url('usuario/') }}">Regresar</a>

<br>