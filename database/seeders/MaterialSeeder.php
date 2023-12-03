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
            'price' => 1500
        ]);

        Material::create([
            'name' => 'ip',
            'price' => 500
        ]);

        Material::create([
            'name' => 'tugma',
            'price' => 300
        ]);

        Material::create([
            'name' => 'zamok',
            'price' => 2000
        ]);
    }
}
