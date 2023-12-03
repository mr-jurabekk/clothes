<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'name',
        'price'
    ];

    public function productMaterial()
    {
        return $this->hasMany(ProductMaterial::class);
    }

    public function warehouse()
    {
        return $this->hasMany(Warehouse::class);
    }
}
