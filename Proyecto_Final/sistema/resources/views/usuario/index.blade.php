<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RodaStore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link type="text/css" href="../../css" rel="stylesheet">
    <link type="text/css" href="./CSS/style1.css" rel="stylesheet">
    <link rel="icon" href="./Imagenes/logo.png">
</head>

<body>
    <div class="container-fluid">
        <div class="row"><img class="w-100" src="./Imagenes/BANNERDES.png" alt="Banner"></div>
        <header class="row border-white border-2 border-bottom border-top">
            <div class="w-50 d-flex justify-content-center text-white align-self-center">
                <button class="btn btn-success w-auto h-auto boton-nav" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><svg
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-wrench-adjustable-circle-fill" viewBox="0 0 16 16">
                        <path
                            d="M6.705 8.139a.25.25 0 0 0-.288-.376l-1.5.5.159.474.808-.27-.595.894a.25.25 0 0 0 .287.376l.808-.27-.595.894a.25.25 0 0 0 .287.376l1.5-.5-.159-.474-.808.27.596-.894a.25.25 0 0 0-.288-.376l-.808.27.596-.894Z" />
                        <path
                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16Zm-6.202-4.751 1.988-1.657a4.5 4.5 0 0 1 7.537-4.623L7.497 6.5l1 2.5 1.333 3.11c-.56.251-1.18.39-1.833.39a4.49 4.49 0 0 1-1.592-.29L4.747 14.2a7.031 7.031 0 0 1-2.949-2.951ZM12.496 8a4.491 4.491 0 0 1-1.703 3.526L9.497 8.5l2.959-1.11c.027.2.04.403.04.61Z" />
                    </svg></button>

                <div class="offcanvas offcanvas-start text-bg-dark" data-bs-scroll="true" tabindex="-1"
                    id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header OFCan">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel"></h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body text-white border-end border-white canvas">
                        <div class="btn-group-vertical d-flex boton-nav btn-success" role="group"
                            aria-label="Vertical button group">
                            <a href="./productos.html" class="btn">Productos y servicios</a>
                            <a href="./nosotros.html" class="btn">Quienes somos</a>
                        </div>
                        <div class="p-3 ps-4 align-items-center">
                            <img class="border" src="https://media.tenor.com/w_QxD84MkWYAAAAC/lucy-cyberpunk-edgerunners.gif" width="300px">
                        </div>
                        <div class="p-3 ps-4 align-items-center">
                            <img class="border" src="https://media.tenor.com/tAYGIaNtjl0AAAAM/pain-nagato-naruto.gif" width="300px">
                        </div>
                    </div>
                </div>
                <h2>Tienda de hardware y software</h2>
            </div>
            <div class="col-6 w-50 text-center align-self-center">
                <div class="btn-group btn-success col-8 text-white boton-nav shadow-sm">
                    <a href="{{ url('/usuario/index') }}" class="btn">Inicio / Home</a>
                    <a href="./contacto.html" class="btn">Contacto</a>
                    <a href="{{ url('/usuario/create') }}" class="btn">Registrarse</a>
                    <a href="./PHP/login.php" class="btn">Iniciar Sesion</a>
                </div>
            </div>
        </header>
        <main class="row text-white border-bottom border-white border-2 p-4 py-5">
            <div class="col w-50">
                <h1>Hola desconocido!</h1>
                <p>Bienvenido/a a RodaStore, donde encontraras mucha variedad de componentes y mucho mas con facilidad,
                    somos Roda.S.A, cualquier duda o comentario te invitamos a entrar a nuestros apartado de contacto,
                    en donde nuestros operadores estaran encantados de ayudarte, esperamos con ansias que disfrutes la
                    pagina.</p>
                <h1>Donde nos puedes encontrar</h1>
                <div class="col ">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3112.157842262417!2d-72.59307558409363!3d-38.737139995213006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9614d3dd6fb348ed%3A0xbef5178a0c3b2653!2spc%20Factory!5e0!3m2!1ses-419!2scl!4v1669939669916!5m2!1ses-419!2scl"
                        width="900" height="400" style="border: 1px solid white;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col w-50 text-center">
                <h1>Ultimas novedades</h1>
                <div class="border">
                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="5000">
                                <img src="./Carr/Intel-Arc-A770.png" class="d-block w-100" alt="..."
                                    style="width: 100%; height: 500px;">
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                                <img src="./Carr/rtx4090.jpeg" class="d-block w-100" alt="..."
                                    style="width: 100%; height: 500px;">
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                                <img src="./Carr/xt6700.jpg" class="d-block w-100" alt="..."
                                    style="width: 100%; height: 500px;">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </main>
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top row">
            <p class="col-md-4 mb-0 text-white">© Todos los derechos reservados Roda.S.A</p>

            <a href="./index.html"
                class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <img src="./Imagenes/logo.png" style="height: 60px;">
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