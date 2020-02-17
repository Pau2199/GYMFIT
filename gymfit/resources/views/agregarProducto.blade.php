@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row p-5 justify-content-center">
        <div class="col-sm-12 col-md-8">
            <form action="" id="formProducto">
                <div class="form-group">
                    <label for="nombre" class="font-weight-bold">Nombre Producto</label>
                    <input type="text" name="nombre" class="form-control formProducto" required id="nombreProducto" placeholder="Escriba el nombre del producto aqui...">
                    <!--                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                </div>                        
                <div class="form-group">
                    <label for="marca" class="font-weight-bold">Marca del Producto</label>
                    <input type="text" id="marcaProducto" name="marca" class="form-control formProducto" required placeholder="Escriba la marca del producto aqui...">
                </div>
                <div class="form-group">
                    <label for="descripcion" class="font-weight-bold">Descripción del Producto</label>
                    <textarea class="form-control formProducto" id="desProducto" name="descripcion" rows="3" required placeholder="Escriba la descripcion del producto aqui..."></textarea>
                </div>

                <div class="form-group">
                    <label for="precio" class="font-weight-bold">Precio del Producto</label>
                    <input type="number" id="precioProducto" name="precio" class="form-control formProducto" required min="1" placeholder="Escriba el precio del producto aqui...">
                </div>      
                <div class="form-group">
                    <label for="descuento"  class="font-weight-bold">Descuento del Producto</label>
                    <select class="form-control formProducto" name="descuento" id="descuentoProducto">
                        <option>0</option>
                        <option>5</option>
                        <option>10</option>
                        <option>15</option>
                        <option>20</option>
                        <option>25</option>
                        <option>30</option>
                        <option>35</option>
                        <option>40</option>
                        <option>45</option>
                        <option>50</option>
                        <option>55</option>
                        <option>60</option>
                        <option>65</option>
                        <option>70</option>
                        <option>75</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="categoria" class="font-weight-bold">Categoria del Producto</label>
                    <select class="form-control formProducto" name="categoria" id="categoriaProducto">
                        <option>Selecciona una categoria</option>
                        <option>Ropa</option>
                        <option>Material</option>
                        <option>Máquinas</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="subcategoria" class="font-weight-bold">Subcategoria del Producto</label>
                    <select class="form-control formProducto" name="subcategoria" id="subcategoriaProducto">
                        <option>Selecciona una subcategoria</option>
                        <option>Camisetas</option>
                        <option>Sudadera</option>
                        <option>Tops</option>
                        <option>Pantalones</option>
                        <option>Calzado</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="arvhivo">Imagenes del producto</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="subirArchivo" name="file" multiple="">
                        <label class="custom-file-label" for="customFile">Selecciona un archivo</label>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
                    <button type="reset" name="reset" class="btn btn-primary">Resetear</button>
                </div>

            </form>

        </div>

    </div>

</div>
@stop