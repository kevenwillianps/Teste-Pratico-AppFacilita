<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsuarioLivros extends Model
{
    // Habilita o preenchimento em massa
    protected $fillable = ['user_id', 'livro_id', 'data_emprestimo', 'data_devolucao', 'situacao'];

    // Evento que executa uma ação sempre que um registro for criado
    protected static function boot()
    {
        parent::boot();

        // Aciona quando for inserção
        static::creating(function ($emprestimo) {

            // Busco o livro em questão
            $livro = Livros::find($emprestimo->livro_id);

            // Verifico se o livro existe
            if ($livro) {

                // Verifico se o livro foi marcado como emprestado ou atrasado
                if ($emprestimo->situacao === 'atrasado' || $emprestimo->situacao === 'emprestado') {

                    // Defino o andamento do livro
                    $livro->situacao = 'emprestado';

                    // Atualizo o andamento do livro
                    $livro->save();
                }
            }
        });

        // Aciona quando for atualização
        static::updating(function ($emprestimo) {

            // Busco o livro desejado
            $livro = Livros::find($emprestimo->livro_id);

            // Verifico se o livro foi localizado
            if ($livro) {

                // Verifico se continua emprestado
                if ($emprestimo->situacao === 'emprestado') {

                    // Defino o andamento do livro
                    $livro->situacao = 'emprestado';
                } elseif ($emprestimo->situacao === 'devolvido') // verifico se foi devolvido
                {

                    // define o andamento do livro
                    $livro->situacao = 'disponivel';
                }

                // Atualizo o livro desejado
                $livro->save();
            }
        });
    }

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
