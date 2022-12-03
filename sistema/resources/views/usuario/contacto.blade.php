<!--Iniciamos html 5 con DOCTYPE-->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RodaStore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link type="text/css" href="./scss/custom.css" rel="stylesheet">
    <link type="text/css" href="./CSS/style1.css" rel="stylesheet">
    <link rel="icon" href="./Imagenes/logo.png">
</head>
<script>
    var objAjax = null

    //Creamos el objeto objXMLHttp, dependiendo del browser

    if (window.XMLHttpRequest)
        objAjax = new XMLHttpRequest() //para Mozilla
    else if (window.ActiveXObject)
        objAjax = new ActiveXObject("Microsoft.XMLHTTP")

    function TraerSelect(tr) {
        objAjax.open("GET", "datos.php?codigo=" + tr);
        objAjax.send();


        objAjax.onreadystatechange = RefrescarCapa

    }

    function RefrescarCapa() {
        if (objAjax.readyState == 4)
            document.getElementById("miCapa").innerHTML =
                objAjax.responseText;
    }

</script>
<!--Creamos la etiquta body, para insertar y crear todo tipo de opciones ya sea funciones, imagenes, h1, etc-->

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
                    <a href="./index.html" class="btn">Inicio / Home</a>
                    <a href="./contacto.html" class="btn">Contacto</a>
                    <a href="./PHP/registro.php" class="btn">Registrarse</a>
                    <a href="./PHP/login.php" class="btn">Iniciar Sesion</a>
                </div>
            </div>
        </header>
        <main class="row text-white border-bottom border-white border-2 p-4 py-5">
            <div class="row">
                <h1>Formulario</h1>
                <p>¿Tienes problemas? No te preocupes. Aqui en RodaStore te podemos ayudar, envianos tu informacion ya
                    sea queja o recomendaciones
                    estaremos encantados de ayudarte.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-4 border rounded-3 p-3 azulito shadow">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nombre</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Correo</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <label for="Razon">Razon:</label>
                        <select name="contacto" id="codigo" onchange="TraerSelect(this.value)">
                            <option value="0">--Seleccione una opcion de contacto--</option>
                            <option value="01">Ayuda</option>
                            <option value="02">Reporte</option>
                            <option value="03">Quejas</option>
                        </select><br><br>
                        <form action="#">
                            <div id="miCapa">
                                <label for="Por">Especifique:</label>
                                <select name="Por" id="PorX">
                                    <option value="0">--Seleccione una opcion--</option>
                                </select><br>
                            </div><br>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Comentarios</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <button type="submit" class="btn btn-success OFCan border ">Enviar</button>
                        </form>
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