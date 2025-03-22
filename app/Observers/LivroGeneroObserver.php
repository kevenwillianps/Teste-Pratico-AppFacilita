<?php

namespace App\Observers;

use App\Models\LivroGeneros;
use Illuminate\Support\Facades\Log;

class LivroGeneroObserver
{
    /**
     * Handle the LivroGeneros "created" event.
     */
    public function created(LivroGeneros $livroGeneros): void
    {
        Log::info("O gênero'{$livroGeneros->genero_id}' foi vinculado ao livro {$livroGeneros->livro_id}!");
    }

    /**
     * Handle the LivroGeneros "updated" event.
     */
    public function updated(LivroGeneros $livroGeneros): void
    {
        Log::info("O gênero'{$livroGeneros->livro_genero_id}' foi atualizado!");
    }

    /**
     * Handle the LivroGeneros "deleted" event.
     */
    public function deleted(LivroGeneros $livroGeneros): void
    {
        Log::info("O gênero'{$livroGeneros->livro_genero_id}' foi removido!");
    }
}
