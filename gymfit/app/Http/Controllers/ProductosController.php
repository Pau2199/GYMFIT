<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Product;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agregarProducto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function prueba()
    {
        $product = new Product;
        $product->name = 'pedro';
        $product->brand = 'manolo';
        $product->description = 'asasasasas';
        $product->price = 10.0;
        $product->discount = 0;
        $product->iva = 0;
        $product->idCategoria = 1;
        $product->save();
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    public function store(Request $request)
    {
        $product = new Product;
        $product->name = 'pedro';
        $product->brand = 'manolo';
        $product->description = 'asasasasas';
        $product->price = 10.0;
        $product->discount = 0;
        $product->iva = 0;
        $product->idCategoria = 1;
        $product->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $productos = Product::all();
        foreach($productos as $valor ){
            echo $valor->name;
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
