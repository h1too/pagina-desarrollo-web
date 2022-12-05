<form action="{{ url('/usuario/'.$usuario->id) }}" method="post">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    {{ method_field('PATCH') }}
    @include('usuario.form')

</form>
