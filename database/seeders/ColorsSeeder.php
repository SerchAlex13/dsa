<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Color::create(['nombre' => 'Rojo']);
        Color::create(['nombre' => 'Marino']);
        Color::create(['nombre' => 'Rey']);
        Color::create(['nombre' => 'Turquesa']);
        Color::create(['nombre' => 'Rosa Mexicano']);
        Color::create(['nombre' => 'Fiucsia']);
        Color::create(['nombre' => 'Morado']);
        Color::create(['nombre' => 'Oxford']);
        Color::create(['nombre' => 'Negro']);
        Color::create(['nombre' => 'Amarillo']);
    }
}
