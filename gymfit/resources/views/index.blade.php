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
        @include('partes.cabecera')
        <div id="carouselImagenes" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselImagenes" data-slide-to="0" class="active"></li>
                <li data-target="#carouselImagenes" data-slide-to="1"></li>
                <li data-target="#carouselImagenes" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 imagenCarrusel" src="{{asset('img/prueba.jpg')}}" alt="Primera Imagen">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 imagenCarrusel" src="{{asset('img/gimnasio2.jpg')}}" alt="Segunda Imagen">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 imagenCarrusel" src="{{asset('img/logo.png')}}" alt="Tercera Imagen">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselImagenes" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#carouselImagenes" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
        <h2 class="text-center text-uppercase font-weight-bold mt-2">Más vendidos</h2>
        <div class="container-fluid">
            <div class="row justify-content-center mb-5">
                <div class="col-md-3">
                    <div>
                        <img class="imgaenesProductos" src="{{asset('img/productos/pantalones.jpg')}}" alt="pantalones">
                    </div>
                </div>
                <div class="col-md-3">
                    <div>
                        <img class="imgaenesProductos" src="{{asset('img/productos/pantalones.jpg')}}" alt="pantalones">
                    </div>
                </div>
                <div class="col-md-3">
                    <div>
                        <img class="imgaenesProductos" src="{{asset('img/productos/pantalones.jpg')}}" alt="pantalones">
                    </div>
                </div>
            </div>
        </div>
        
        @include('partes.footer')
    </body>
</html>