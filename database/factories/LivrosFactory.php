<?php

namespace Database\Factories;

use App\Models\Livros;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Livros>
 */
class LivrosFactory extends Factory
{
    protected $model = Livros::class;

    public function definition(): array
    {
        return [
            'nome' => $this->faker->sentence(3),
            'autor' => $this->faker->name(),
            'situacao' => $this->faker->randomElement(['emprestado', 'disponivel']),
        ];
    }
}
