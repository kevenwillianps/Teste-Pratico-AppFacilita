<?php

namespace App\Models;

use App\Enums\StatusLivro;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livros extends Model
{

    // Habilita para usar factory
    use HasFactory;

    // Habilito os campos para preenchimento em massa
    protected $fillable = ['nome', 'autor', 'situacao'];

    // Converte automaticamente o campo situacao para o enum StatusLivro
    protected $casts = [
        'situacao' => StatusLivro::class,
    ];

    // Define o relacionamento entre tabelas
    public function generos()
    {
        return $this->belongsToMany(Generos::class, 'livro_generos', 'livro_id', 'genero_id')->withTimestamps();
    }

    public function emprestimos()
    {
        return $this->hasMany(UsuarioLivros::class, 'livro_id');
    }
}
