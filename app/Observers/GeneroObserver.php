<?php

namespace App\Observers;

use App\Models\Generos;
use Illuminate\Support\Facades\Log;

class GeneroObserver
{
    /**
     * Handle the Generos "created" event.
     */
    public function created(Generos $generos): void
    {
        Log::info("O gênero '{$generos->nome}' foi cadastrado!");
    }

    /**
     * Handle the Generos "updated" event.
     */
    public function updated(Generos $generos): void
    {
        Log::info("O gênero '{$generos->nome}' foi atualizado!");
    }

    /**
     * Handle the Generos "deleted" event.
     */
    public function deleted(Generos $generos): void
    {
        Log::info("O gênero '{$generos->nome}' foi removido!");
    }
}
