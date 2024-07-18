<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Product::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'description' => ['nullable', 'string', 'max:255'],
            'category_id' => ['required', 'integer'],
            'unit_of_measurement' => ['required', 'integer'],
            'price' => ['required', 'integer', 'min:1000'],
            'stock' => ['required', 'integer', 'min:1'],
        ]);

        Product::create($datos);

        return response()->json([
            'success' => true,
            'message' => 'Producto creado correctamente',
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return response()->json($product, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $datos = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'description' => ['nullable', 'string', 'max:255'],
            'category_id' => ['required', 'integer'],
            'unit_of_measurement' => ['required', 'integer'],
            'price' => ['required', 'integer', 'min:1000'],
            'stock' => ['required', 'integer', 'min:1'],
        ]);

        $product->update($datos);

        return response()->json([
            'success' => true,
            'message' => 'Producto actualizado correctamente',
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return response()->json([
            'success' => true,
        ], 204);
    }
}
