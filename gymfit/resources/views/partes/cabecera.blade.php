<header class="container-fluid">
    <div class="row justify-content-md-between">
        <div class="col-md-4 my-4">
            <img class="logotipo" src="{{asset('img/logo.png')}}" alt="">
        </div>
        <div class="col-md-7 mt-5">
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