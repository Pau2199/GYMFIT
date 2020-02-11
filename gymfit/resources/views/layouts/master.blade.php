<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="{{asset('css/estilo.css')}}" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body>
        <header class="container-fluid">
            <div class="row justify-content-md-between">
                <div class="col-md-4">
                    <img class="logotipo" src="{{asset('img/logotipo.svg')}}" alt="">
                </div>
                <div class="col-md-7 mt-4">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2 w-50" type="text" placeholder="Buscar producto" aria-label="Buscar">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                    </form>
                </div>
                <div class="col-md-1 mt-4">
                    <img class="svgTamanyo" src="{{asset('img/carritoCompra.svg')}}" alt="Carrito de la Compra">
                    <span class="letraCesta">Cesta</span>
                </div>
            </div>
        </header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#opciones">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- enlaces -->
            <div class="collapse navbar-collapse" id="opciones">   
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ropa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Maquinas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Accesorios / Materiales</a>
                    </li>          
                </ul>
            </div>
        </nav>
        <footer class="page-footer font-small blue-grey lighten-5 footer">
            <div class="container-fluid text-center text-md-left">
                <div class="row mt-3 dark-text mt-5">
                    <div class="col-md-3 col-lg-2 mx-auto mt-3">
                        <h6 class="text-uppercase font-weight-bold">Información</h6>
                        <hr class="mb-4 mt-0 d-inline-block w-50">
                        <p>
                            <a class="text-warning" href="#!">¿Quienes Somos?</a>
                        </p>
                        <p>
                            <a class="text-warning" href="#!">Terminos y condiciones</a>
                        </p>
                        <p>
                            <a class="text-warning" href="#!">Trabaja con Nosotros</a>
                        </p>
                    </div>
                    <div class="col-md-3 col-lg-2 mx-auto mt-3">
                        <h6 class="text-uppercase font-weight-bold">Productos</h6>
                        <hr class="mb-4 mt-0 d-inline-block w-50">
                        <p>
                            <a class="text-warning" href="#!">Ropa</a>
                        </p>
                        <p>
                            <a class="text-warning" href="#!">Materiales</a>
                        </p>
                        <p>
                            <a class="text-warning" href="#!">Maquinas</a>
                        </p>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 mt-3">
                        <h6 class="text-uppercase font-weight-bold">Contacta con nosotros!</h6>
                        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 215px;">
                        <p>+34 685 21 22 56</p>
                        <p>964 55 41 78</p>
                        <p>contacto@gymfit.com</p>
                    </div>
                </div>
            </div>
                <div class="container-fluid fondoCopyEnlaces">
                    <div class="row py-3 d-flex">
                        <div class="col-md-6 col-lg-5 text-center mb-4">
                            <h6 class="mb-0 colorLetra">Siguenos en nuestras redes Sociales!</h6>
                        </div>
                        <div class="col-md-6 col-lg-7 text-center">
                                <img class="redesSociales" src="{{asset('img/instagram.png')}}" alt="Instragram">
                                <img class="redesSociales" src="{{asset('img/twitter.png')}}" alt="Twitter">
                                <img class="redesSociales" src="{{asset('img/facebook.png')}}" alt="Facebook">
                        </div>
                    </div>
                    <div class="footer-copyright text-center py-3 colorLetra">
                       © 2020 Copyright: GYMFIT
                    </div>
                </div>
        </footer>
    </body>
</html>