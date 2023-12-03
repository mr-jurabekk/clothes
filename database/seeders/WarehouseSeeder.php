<?php

namespace Database\Seeders;

use App\Models\Warehouse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Warehouse::create([
            'material_id' => 1,
            'remainder' => 100,
        ]);

        Warehouse::create([
            'material_id' => 2,
            'remainder' => 100,
        ]);
        Warehouse::create([
            'material_id' => 3,
            'remainder' => 100,
        ]);
        Warehouse::create([
            'material_id' => 4,
            'remainder' => 50,
        ]);
    }
}
