<?php

namespace Database\Seeders;

use App\Models\Talla;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TallasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Talla::create(['nombre' => 'XS']);
        Talla::create(['nombre' => 'S']);
        Talla::create(['nombre' => 'M']);
        Talla::create(['nombre' => 'L']);
        Talla::create(['nombre' => 'XL']);
        Talla::create(['nombre' => 'XXL']);
    }
}
