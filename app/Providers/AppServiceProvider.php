<?php

namespace App\Providers;

use App\Models\Generos;
use App\Models\LivroGeneros;
use App\Models\Livros;
use App\Models\User;
use App\Models\UsuarioLivros;
use App\Observers\GeneroObserver;
use App\Observers\LivroGeneroObserver;
use App\Observers\LivroObserver;
use App\Observers\UserObserver;
use App\Observers\UsuarioLivroObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Generos::observe(GeneroObserver::class);
        LivroGeneros::observe(LivroGeneroObserver::class);
        Livros::observe(LivroObserver::class);
        UsuarioLivros::observe(UsuarioLivroObserver::class);
        User::observe(UserObserver::class);
    }
}
