<?php

namespace App\Http\Controllers;

use App\Http\Resources\ShowWarehouseResource;
use App\Http\Resources\WarehouseResource;
use App\Models\Warehouse;
use App\Http\Requests\StoreWarehouseRequest;
use App\Http\Requests\UpdateWarehouseRequest;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return WarehouseResource::collection(Warehouse::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWarehouseRequest $request)
    {

//        dd($request);
        $stock = Warehouse::create([
            'material_id' => $request->material_id,
            'remainder' => $request->remainder,
            'price' => $request->price,
        ]);

        $stock->save();


        return response()->json(['success' => true]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Warehouse $warehouse)
    {
        return new ShowWarehouseResource($warehouse);
    }

    public function update(UpdateWarehouseRequest $request, Warehouse $warehouse)
    {

        $stock = Warehouse::where('id', $warehouse->id)->update([
            'remainder' => $warehouse->remainder + $request->remainder,
            'price' => $request->price,
        ]);

        if ($stock) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false]);
        }


    }

    public function destroy(Warehouse $warehouse)
    {
        //
    }
}
