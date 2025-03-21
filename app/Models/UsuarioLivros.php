<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsuarioLivros extends Model
{
    // Habilita o preenchimento em massa
    protected $fillable = ['user_id', 'livro_id', 'data_emprestimo', 'data_devolucao', 'situacao'];

    // Relacionamento com o usuário
    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relacionamento com o livro
    public function livro()
    {
        return $this->belongsTo(Livros::class, 'livro_id');
    }
}
