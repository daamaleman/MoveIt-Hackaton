<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Vista para crear un nuevo producto
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validar los datos del formulario
        $product = new Products();
        $product->name = $request->get('name');
        $product->brand = $request->get('brand');
        $product->size = $request->get('size');
        $product->price = $request->get('price');
        $product->available = $request->get('available');
        $product->description = $request->get('description');
        $product->save();
        return redirect()->route('products.index')->with('success', 'Producto creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Vista para mostrar un producto
        $product = Products::find($id);
        return view('products.show', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Vista para editar un producto
        $product = Products::find($id);
        return view('products.edit', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Validar los datos del formulario
        $product = Products::find($id);
        $product->name = $request->get('name');
        $product->brand = $request->get('brand');
        $product->size = $request->get('size');
        $product->price = $request->get('price');
        $product->available = $request->get('available');
        $product->description = $request->get('description');
        $product->save();
        return redirect()->route('products.index')->with('success', 'Producto actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Eliminar un producto
        $product = Products::find($id);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Producto eliminado correctamente');
    }
}
