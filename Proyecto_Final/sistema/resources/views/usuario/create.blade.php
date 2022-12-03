holaaaa

<form action="{{ url('/usuario') }}" method="post" enctype="multipart/form-data">

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre">
    <br>

    <label for="epellido">Apellido</label>
    <input type="text" name="epellido" id="epellido">
    <br>

    <label for="direccion">Direccion</label>
    <input type="text" name="direccion" id="direccion">
    <br>

    <label for="correo">Correo</label>
    <input type="text" name="correo" id="correo">
    <br>

    <label for="Ncontacto">Numero de contacto</label>
    <input type="text" name="Ncontacto" id="Ncontacto">
    <br>

    <label for="rut">RUT</label>
    <input type="text" name="rut" id="rut">
    <br>

    <input type="submit" name="enviar" id="enviar">
    <br>
</form>