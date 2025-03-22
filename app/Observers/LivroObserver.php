<?php

namespace App\Observers;

use App\Models\Livros;
use Illuminate\Support\Facades\Log;

class LivroObserver
{
    /**
     * Handle the Livros "created" event.
     */
    public function created(Livros $livros): void
    {
        Log::info("📚 Livro '{$livros->nome}' foi cadastrado!");
    }

    /**
     * Handle the Livros "updated" event.
     */
    public function updated(Livros $livros): void
    {

        // Verifica a situação do livro
        switch($livros->isDirty('situacao'))
        {
            case 'emprestado' :

                Log::info("O livro '{$livros->nome}' foi emprestado.");
                break;

            case 'devolvido' :

                Log::info("O livro '{$livros->nome}' foi devolvido.");
                break;
        }
    }

    /**
     * Handle the Livros "deleted" event.
     */
    public function deleted(Livros $livros): void
    {
        Log::warning("Livro '{$livros->nome}' foi excluído!");
    }

}
