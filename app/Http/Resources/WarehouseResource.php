<?php

namespace App\Http\Resources;

use App\Models\Material;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WarehouseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'warehouse_id' => $this->id,
            'quantity' => $this->remainder,
            'price' => $this->material->price,
            'material_name' => $this->material->name,
        ];
    }
}
