<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RodaStore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link type="text/css" href="/scss/custom.css" rel="stylesheet">
    <link type="text/css" href="/css/style1.css" rel="stylesheet">
    <link rel="icon" href="/Imagenes/logo.png">

</head>

<body>
    <div class="container-fluid">
        <main class="row log border-bottom">
            <div class="row h-50 position-absolute top-50 start-50 translate-middle justify-content-center">
                <form class="row g-3 w-25 border border-2 rounded azulito text-white pb-3">
                    <h1>Registrarse</h1>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="floatingTextarea" placeholder="Juan" value="{{ isset($usuario->nombre)?$usuario->nombre:'' }}">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="floatingTextarea" placeholder="Espinoza" value="{{ isset($usuario->apellido)?$usuario->nombre:'' }}">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Direccion</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" value="{{ isset($usuario->direccion)?$usuario->direccion:'' }}">
                    </div>
                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">Correo electronico</label>
                        <input type="email" class="form-control" id="floatingTextarea" placeholder="example@gmail.com" value="{{ isset($usuario->correo)?$usuario->correo:'' }}">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">Numero de contacto</label>
                        <input type="text" class="form-control" id="inputCity" value="{{ isset($usuario->Ncontacto)?$usuario->Ncontacto:'' }}">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">Rut</label>
                        <input type="text" class="form-control" id="inputCity" placeholder="12.345.678-K" value="{{ isset($usuario->rut)?$usuario->rut:''}}">
                    </div>
                    <div class="col-12 w-100 d-flex justify-content-end text-white">
                        <div class="col-4 btn-success">
                            <a href="/index" class="btn border boton-nav">Regresar</a>
                        </div>
                        <div class="col-4 btn-success">
                            <button type="sumbit" class="btn border boton-nav" value="Guardar datos">Registrarse</button>
                        </div>
                    </div>
                </form>
            </div>
        </main>
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top row">
            <p class="col-md-4 mb-0 text-white">© Todos los derechos reservados Roda.S.A</p>

            <a href="/index.html"
                class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <img src="/Imagenes/logo.png" style="height: 60px;">
            </a>

            <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Caracteristicas</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Fijacion de precios</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Preguntas frecuentes</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Sobre</a></li>
            </ul>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>