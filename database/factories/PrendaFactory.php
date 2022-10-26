<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prenda>
 */
class PrendaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => '1',//$this->faker->numberBetween(1, 10),
            'nombre' => $this->faker->word(),
            'tipo' => $this->faker->word(),
            'descripcion' => $this->faker->text(255),
            'color' => $this->faker->safeColorName(),
            'tela' => $this->faker->word(),
            'precio' => $this->faker->randomFloat(2, 20, 1000),
            'inventario' => $this->faker->numberBetween(1, 1000),
        ];
    }
}
