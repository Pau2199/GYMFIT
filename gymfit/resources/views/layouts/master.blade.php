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
                <div class="col-md-3">
                    <h1 class="titulo">GYMFIT</h1>
                </div>
                <div class="col-md-6 mt-2">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2 w-50" type="text" placeholder="Buscar producto" aria-label="Buscar">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                    </form>
                </div>
                <div class="col-md-1 mt-2">
                    <img class="svgTamanyo" src="{{asset('img/carritoCompra.svg')}}" alt="Carrito de la Compra">
                    <span class="letraCesta">Cesta</span>
                </div>
            </div>
        </header>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand">Ropa</a>
            <a class="navbar-brand">Maquina</a>
            <a class="navbar-brand">Material</a>
        </nav>
    </body>
</html>