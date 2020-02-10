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
        <!-- Footer -->
        <footer class="page-footer font-small blue-grey lighten-5 footer">

            <!-- Footer Links -->
            <div class="container text-center text-md-left mt-5">

                <!-- Grid row -->
                <div class="row mt-3 dark-text">

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                        <!-- Links -->
                        <h6 class="text-uppercase font-weight-bold">Products</h6>
                        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <a class="dark-text" href="#!">MDBootstrap</a>
                        </p>
                        <p>
                            <a class="dark-text" href="#!">MDWordPress</a>
                        </p>
                        <p>
                            <a class="dark-text" href="#!">BrandFlow</a>
                        </p>
                        <p>
                            <a class="dark-text" href="#!">Bootstrap Angular</a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                        <!-- Links -->
                        <h6 class="text-uppercase font-weight-bold">Useful links</h6>
                        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <a href="#!">Your Account</a>
                        </p>
                        <p>
                            <a href="#!">Become an Affiliate</a>
                        </p>
                        <p>
                            <a class="dark-grey-text" href="#!">Shipping Rates</a>
                        </p>
                        <p>
                            <a class="dark-grey-text" href="#!">Help</a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                        <!-- Links -->
                        <h6 class="text-uppercase font-weight-bold">Contact</h6>
                        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                        <p>
                            <i class="fas fa-envelope mr-3"></i> info@example.com</p>
                        <p>
                            <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                        <p>
                            <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <div style="background-color: #222831;">
                <div class="container">

                    <!-- Grid row-->
                    <div class="row py-4 d-flex align-items-center">

                        <!-- Grid column -->
                        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                            <h6 class="mb-0">Siguenos en nuestras redes Sociales!</h6>
                        </div>
                        <div class="col-md-6 col-lg-7 text-center text-md-right">
                                <img class="redesSociales" src="{{asset('img/instagram.png')}}" alt="Instragram">
                                <img class="redesSociales" src="{{asset('img/twiter.png')}}" alt="Twitter">
                                <img class="redesSociales" src="{{asset('img/facebook.png')}}" alt="Facebook">
                        </div>
                    </div>
                    <div class="footer-copyright text-center text-black-50 py-3">
                       © 2020 Copyright:
                        <a class="dark-grey-text" href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
                    </div>


                </div>
            </div>
        </footer>
    </body>
</html>