<?php

namespace Database\Seeders;

use App\Models\Prenda;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrendasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prenda::create(['user_id' => '1', 'nombre' => 'Playera 1', 'tipo' => 'Playera', 'descripcion' => 'Playera para niño', 'color' => 'Rojo', 'tela' => 'Lickra', 'precio' => '499', 'inventario' => '50']);
        
        Prenda::factory(20)->create();
    }
}
