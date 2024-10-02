<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clase>
 */
class ClaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word,
            'imagen' => $this->faker->imageUrl(),
            'descripcion' => $this->faker->text,
            'materialDidactico' => $this->faker->word,
            'kitID' => $this->faker->numberBetween(1, 3), // 1 a 3 por el uso de 3 kits
        ];
    }
}
