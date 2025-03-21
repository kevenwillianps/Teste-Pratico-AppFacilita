<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Generos extends Model
{

    // Habilito para usar factory
    use HasFactory;

    // Ativo o preenchimento em massa
    protected $fillable = ['nome'];

    // Define o relacionamento entre tabelas
    public function livros()
    {
        return $this->belongsToMany(Livros::class, 'livro_generos', 'genero_id', 'livro_id')->withTimestamps();
    }
}
