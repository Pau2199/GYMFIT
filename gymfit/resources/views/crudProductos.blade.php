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
        <div class="container">
            <div class="row justify-content-around text-center">
                <h1 class="m-5 text-center p-3">Lista de Productos</h1>
                <div class="col-md-8 my-3">
                    <form action="">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Categoria</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Seleccione una categoria...</option>
                                <option>Ropa</option>
                                <option>Accesorios</option>
                                <option>Maquinas</option>
                            </select>
                        </div> 
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Subcategoria</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Seleccione una subcategoria</option>
                                <option>Camisetas</option>
                                <option>Sudaderas</option>
                                <option>Tops</option>
                                <option>Pantalones</option>
                                <option>Calzado</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class=" table-responsive-sm">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Marca</th>
                                    <th scope="col">Descripcion</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Descuento</th>
                                    <th scope="col">Categoria</th>
                                    <th scope="col">Subcategoria</th>
                                    <th scope="col" class="text-dark">borrar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Pantalones Leggins</td>
                                    <td>Nike</td>
                                    <td>Pantalones Leggins fabricados en china con particulas de carbono y de color azul</td>
                                    <td>29,99€</td>
                                    <td>0%</td>
                                    <td>Ropa</td>
                                    <td>Pantalones</td>
                                    <td><img src="{{asset('img/trash.svg')}}" alt="papelera"></td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Pantalones Leggins</td>
                                    <td>Nike</td>
                                    <td>Pantalones Leggins fabricados en china con particulas de carbono y de color azul</td>
                                    <td>29,99€</td>
                                    <td>0%</td>
                                    <td>Ropa</td>
                                    <td>Pantalones</td>
                                    <td><img src="{{asset('img/trash.svg')}}" alt="papelera"></td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Pantalones Leggins</td>
                                    <td>Nike</td>
                                    <td>Pantalones Leggins fabricados en china con particulas de carbono y de color azul</td>
                                    <td>29,99€</td>
                                    <td>0%</td>
                                    <td>Ropa</td>
                                    <td>Pantalones</td>
                                    <td><img src="{{asset('img/trash.svg')}}" alt="papelera"></td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Pantalones Leggins</td>
                                    <td>Nike</td>
                                    <td>Pantalones Leggins fabricados en china con particulas de carbono y de color azul</td>
                                    <td>29,99€</td>
                                    <td>0%</td>
                                    <td>Ropa</td>
                                    <td>Pantalones</td>
                                    <td><img src="{{asset('img/trash.svg')}}" alt="papelera"></td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Pantalones Leggins</td>
                                    <td>Nike</td>
                                    <td>Pantalones Leggins fabricados en china con particulas de carbono y de color azul</td>
                                    <td>29,99€</td>
                                    <td>0%</td>
                                    <td>Ropa</td>
                                    <td>Pantalones</td>
                                    <td><img src="{{asset('img/trash.svg')}}" alt="papelera"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>