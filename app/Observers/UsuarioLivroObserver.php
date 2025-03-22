<?php

namespace App\Observers;

use App\Models\UsuarioLivros;
use Illuminate\Support\Facades\Log;

class UsuarioLivroObserver
{
    /**
     * Handle the UsuarioLivros "created" event.
     */
    public function created(UsuarioLivros $usuarioLivros): void
    {
        Log::info("O usuário'{$usuarioLivros->user_id}' foi vinculado ao livro {$usuarioLivros->livro_id}!");
    }

    /**
     * Handle the UsuarioLivros "updated" event.
     */
    public function updated(UsuarioLivros $usuarioLivros): void
    {
        Log::info("O empréstimo '{$usuarioLivros->id}' foi atualizado!");
    }

    /**
     * Handle the UsuarioLivros "deleted" event.
     */
    public function deleted(UsuarioLivros $usuarioLivros): void
    {
        Log::info("O empréstimo '{$usuarioLivros->id}' foi removido!");
    }
}
