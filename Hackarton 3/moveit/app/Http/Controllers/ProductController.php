<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 
        $user = auth()->user();
        $products = $user->products->sortByDesc('created_at');
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Vista para crear un producto
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Validar los datos del formulario
        $product = new Product();
        $product->name = $request->get('name');
        $product->brand = $request->get('brand');
        $product->size = $request->get('size');
        $product->price = $request->get('price');
        $product->available = $request->get('available');
        $product->description = $request->get('description');
        $product->user_id = auth()->id();
        $product->save();


        if ($request->hasFile('url_img')) {
            $id = $product->id;
            $imageName = $id . '.' . $request->file('url_img')->getClientOriginalExtension();
            $request->file('url_img')->move(public_path('img/products'), $imageName);
            $product->url_img = $imageName;
            $product->save();
        } else {
            $product->url_img = 'images/sinfoto.jpg';
            $product->save();
        }

        return redirect()->route('products.index')->with('success', 'Producto creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Vista para mostrar un producto
        $product = Product::find($id);
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Vista para editar un producto
        $product = Product::find($id);
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validar los datos del formulario 
        $product = Product::find($id);
        $product->name = $request->get('name');
        $product->brand = $request->get('brand');
        $product->size = $request->get('size');
        $product->price = $request->get('price');
        $product->available = $request->get('available');
        $product->description = $request->get('description');
        $product->url_img = $request->get('url_img');
        $product->user_id = auth()->id();
        $product->save();
        return redirect()->route('products.index')->with('success', 'Producto actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Eliminar un producto
        $product = Product::find($id);
        if ($product) {
            $product->delete();
        }
        return redirect()->route('products.index')->with('success', 'Producto eliminado correctamente');
    }
}
