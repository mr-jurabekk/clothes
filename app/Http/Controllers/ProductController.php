<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\ProductMaterial;
use App\Models\Warehouse;

class ProductController extends Controller
{

    public function index()
    {
        return ProductResource::collection(Product::all());
    }


    public function create()
    {
        //
    }


    public function store(StoreProductRequest $request)
    {

        $store = Product::create([
            'name' => $request->name,
            'quantity' => $request->quantity
        ]);

        return response()->json(['success' => true]);
    }


    public function show(Product $product)
    {
        //
    }


    public function edit(Product $product)
    {
        //
    }


    public function update(UpdateProductRequest $request, Product $product)
    {

        $addProduct = Product::where('id', $product->id)->update([
            'quantity' => $product->quantity + $request->quantity,

        ]);

        $stocks = ProductMaterial::where('product_id', $product->id)->paginate(10)->flatten()->toArray();
        foreach ($stocks as $key => $stock) {
            $ware = Warehouse::where('material_id', $stock['material_id'])->paginate(10)->flatten()->toArray();
            $r = $stock['quantity'] * $request->quantity;
            if ($ware[0]['remainder'] >= $r){
                $ware[0]['remainder'] -= $r;
            }else{
                $ware[0]['remainder'] = null;
            }
//            Warehouse::where('material_id', $stock['material_id'])->update([
//                'remainder' => $ware[0]['remainder']
//            ]);
            dump($ware);
        }

        if ($addProduct) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false]);
        }
    }


    public function destroy(Product $product)
    {
        //
    }
}
