<?php

namespace Database\Seeders;

use App\Models\Generos;
use App\Models\Livros;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Insere 10 registros de livro
        Livros::factory(10)->create();

        // Insere 10 registros de livro
        Generos::factory(5)->create();

        // Insere 10 registros de livro
        User::factory(5)->create();

    }
}
