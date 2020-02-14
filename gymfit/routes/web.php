<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

<<<<<<< HEAD
Route::get('/', function () {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    
    return view('crudProductos');
    
=======
    return view('index');
>>>>>>> master
=======
    return view('vistaProducto');
>>>>>>> pau
=======
    
    return view('crudUsuarios');

>>>>>>> Alex
=======
Route::get('/', function(){
    return view('index');
>>>>>>> pau
});
Route::get('/agregarProducto', 'ProductosController@store');


