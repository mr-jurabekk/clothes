<?php

namespace Database\Seeders;

use App\Models\Material;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Material::create([
            'name' => 'mato',
            'quantity' => 100,
            'price' => 1500
        ]);

        Material::create([
            'name' => 'ip',
            'quantity' => 50,
            'price' => 500
        ]);

        Material::create([
            'name' => 'tugma',
            'quantity' => 500,
            'price' => 300
        ]);

        Material::create([
            'name' => 'zamok',
            'quantity' => 1000,
            'price' => 2000
        ]);
    }
}
