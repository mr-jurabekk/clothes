<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductMaterialResource;
use App\Models\ProductMaterial;
use App\Http\Requests\StoreProductMaterialRequest;
use App\Http\Requests\UpdateProductMaterialRequest;
use App\Models\Warehouse;

class ProductMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return ProductMaterialResource::collection(ProductMaterial::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductMaterialRequest $request)
    {
        $store = ProductMaterial::create([
            'product_id' => $request->product_id,
            'material_id' => $request->material_id,
            'quantity' => $request->quantity,
        ]);

        $store->save();

        if ($store) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductMaterial $productMaterial)
    {
        return new ProductMaterialResource($productMaterial);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductMaterial $productMaterial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductMaterialRequest $request, ProductMaterial $productMaterial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductMaterial $productMaterial)
    {
        //
    }
}
