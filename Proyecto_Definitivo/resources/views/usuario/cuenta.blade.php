
<a href="{{ url('/usuario/create') }}">Registrar nuevo usuario</a>

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
        @foreach($usuarios as $usuario)
        <tr>
            <td>{{$usuario->id}}</td>
            <td>{{$usuario->nombre}}</td>
            <td>{{$usuario->apellido}}</td>
            <td>{{$usuario->direccion}}</td>
            <td>{{$usuario->Ncontacto}}</td>
            <td>{{$usuario->correo}}</td>
            <td>{{$usuario->rut}}</td>
            <td> 

            <a href="{{ url('/usuario/'.$usuario->id.'/edit') }}">
                Editar 
            </a>

            <form action="{{ url('/usuario/'.$usuario->id) }}" method="POST">

                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                {{method_field('DELETE')}}

                <input type="submit" onclick="return confirm('¿Real mente quieres borrar este usuario?')"
                value="Borrar">
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>