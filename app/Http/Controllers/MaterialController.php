<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Http\Requests\StoreMaterialRequest;
use App\Http\Requests\UpdateMaterialRequest;

class MaterialController extends Controller
{

    public function index()
    {
        return Material::all();
    }


    public function create()
    {
        //
    }


    public function store(StoreMaterialRequest $request)
    {
        //
    }


    public function show(Material $material)
    {
        //
    }


    public function edit(Material $material)
    {
        //
    }


    public function update(UpdateMaterialRequest $request, Material $material)
    {
        //
    }


    public function destroy(Material $material)
    {
        //
    }
}
