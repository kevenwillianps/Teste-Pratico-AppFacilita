<?php

namespace Database\Factories;

use App\Models\Generos;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Generos>
 */
class GenerosFactory extends Factory
{

    // Importação de classe
    protected $model = Generos::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => $this->faker->name(),
        ];
    }
}
