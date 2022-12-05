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
        <div class="row"><img class="w-100" src="/Imagenes/BANNERDES.png" alt="Banner"></div>
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
                            <a href="/productos" class="btn">Productos y servicios</a>
                            <a href="/nosotros" class="btn">Quienes somos</a>
                        </div>
                        <div class="p-3 ps-4 align-items-center">
                            <img class="border"
                                src="https://media.tenor.com/w_QxD84MkWYAAAAC/lucy-cyberpunk-edgerunners.gif"
                                width="300px">
                        </div>
                        <div class="p-3 ps-4 align-items-center">
                            <img class="border" src="https://media.tenor.com/tAYGIaNtjl0AAAAM/pain-nagato-naruto.gif"
                                width="300px">
                        </div>
                    </div>
                </div>
                <h2>Tienda de hardware y software</h2>
            </div>
            <div class="col-6 w-50 text-center align-self-center">
                <div class="btn-group btn-success col-8 text-white boton-nav shadow-sm">
                    <a href="/index" class="btn">Inicio / Home</a>
                    <a href="/contacto" class="btn">Contacto</a>
                    <a href="/registro" class="btn">Registrarse</a>
                    <a href="/login" class="btn">Iniciar Sesion</a>
                </div>
            </div>
        </header>
        <main class="row text-white border-bottom border-white border-2 p-4 py-5">
            <div class="row d-flex p-3">
                <div class="col-3 w-25">
                    <div class="card" style="width: 28rem;">
                        <img src="/Imagenes/Componentes/GTX1050TI.jpg" class="card-img-top" alt="...">
                        <div class="card-body azulito">
                            <ul>
                                <h3>NVIDIA GTX 1050 TI</h3>
                                <p><b>Especificaciones: </b></p>
                                <li><b>Fabricante</b> Gigabyte</li>
                                <li><b>Memoria </b>4 GB GDDR5 (128 bit)</li>
                                <li><b>Bus</b>PCI Express 3.0 x16</li>
                                <h4>Frecuencias: </h4>
                                <li>Core Base: 1290 MHz</li>
                                <li>Core Boost: 1290 MHz</li>
                                <li>OC: 1354 MHz</li>
                                <li>Memorias: 1500 MHz</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-3 w-25">
                    <div class="card" style="width: 28rem;">
                        <img src="/Imagenes/Componentes/GTX1660TI.jpg" class="card-img-top" alt="...">
                        <div class="card-body azulito">
                            <ul>
                                <h3>NVIDIA GTX 1660 TI</h3>
                                <p><b>Especificaciones: </b>
                                <p>
                                    <li><b>Fabricante </b>Gigabyte</li>
                                    <li><b>Memoria </b>6 GB GDDR6 (192 bit)</li>
                                    <li><b>Bus </b>PCI Express 3.0 x16</li>
                                <h4>Frecuencias:</h4>
                                <li>Core Base: 1500 MHz</li>
                                <li>Core Boost: 1770 MHz</li>
                                <li>OC: 1800 MHz</li>
                                <li>Memorias: 1500 MHz</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 28rem;">
                        <img src="/Imagenes/Componentes/ryzen-5 3400g.jpg" class="card-img-top" alt="...">
                        <div class="card-body azulito">
                            <ul>
                                <h3>AMD Ryzen 3400G</h3>
                                <p><b>Especificaciones: </b></p>
                                <li><b>Frecuencia </b>3700 MHz</li>
                                <li><b>Frecuencia turbo máxima </b>4200 MHz</li>
                                <li><b>Caché </b>4 x 512KB L2 / 4MB L3</li>
                                <li><b>Socket </b>AM4</li>
                                <h4>Núcleos / hilos: </h4>
                                <li>4 núcleos</li>
                                <li>8 hilos</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 28rem;">
                        <img src="/Imagenes/Componentes/RTX2060.jpg" class="card-img-top" alt="...">
                        <div class="card-body azulito">
                            <ul>
                                <h4>NVIDIA RTX 2060</h4>
                                <p><b>Especificaciones: </b></p>
                                <li><b>Fabricante</b> MSI</li>
                                <li><b>Núcleo </b>NVIDIA Turing TU106</li>
                                <li><b>Stream processors </b>1920</li>
                                <li><b>Texture units </b>120</li>
                                <li><b>Texture units </b>48</li>
                                <li><b>Ray tracing cores</b> 30</li>
                                <h4>Frecuencias:</h4>
                                <li>Core Base: 1365 MHz</li>
                                <li>Core Boost: 1680 MHz</li>
                                <li>Memorias: 1750 MHz</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex p-3">
                <div class="col-3 w-25">
                    <div class="card" style="width: 28rem;">
                        <img src="/Imagenes/Componentes/RX6500XT.jpg" class="card-img-top" alt="...">
                        <div class="card-body azulito">
                            <ul>
                                <h3>RX 6500 XT</h3>
                                <p><b>Especificaciones: </b></p>
                                <li><b>Fabricante </b>ASUS</li>
                                <li><b>Memoria </b>4 GB GDDR6 (64 bit)</li>
                                <li><b>Bus </b>PCI Express 4.0 x4</li>
                                <h4>Frecuencias: </h4>
                                <li>Core Base: 2610 MHz</li>
                                <li>Core Boost: 2815 MHz</li>
                                <li>OC: 2820 MHz</li>
                                <li>Memorias: 2250 MHz</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-3 w-25">
                    <div class="card" style="width: 28rem;">
                        <img src="/Imagenes/Componentes/RAM FURY DDR4.jpg" class="card-img-top" alt="...">
                        <div class="card-body azulito">
                            <p class="card-text">Memoria Ram DDR4 8GB 3200MHz Kingston FURY Beast Black RGB DIMM,
                                Non-ECC, CL16, 1.35V</p>
                        </div>
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