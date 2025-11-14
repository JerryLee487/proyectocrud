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
       $products = Product::all();
       return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
        # esta se usa para guardar un nuevo producto y datos validados
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // este es para mostrar un producto especifico
        $product = Product::find($id);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // este es para editar un producto especifico
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // este es para actualizar un producto especifico
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
        ]);
        Product::find($id)->update($request->all());
        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // este es para eliminar un producto especifico
        Product::find($id)->delete();
        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully.');
    }
}
