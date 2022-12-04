<form action="{{ url('/usuario') }}" method="POST" enctype="multipart/form-data">
    
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    @include('usuario.form')

</form>