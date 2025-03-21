<?php

namespace App\Http\Controllers;

use App\Enums\StatusEmprestimo;
use App\Http\Requests\UsuarioLivrosRequest;
use App\Models\Livros;
use App\Models\User;
use App\Models\UsuarioLivros;
use Illuminate\Http\Request;

class UsuarioLivrosController extends Controller
{
    // Página inicial dos livros
    public function index()
    {

        // Busca todos os livros
        $usuarioLivros = UsuarioLivros::with(['usuario', 'livro'])->orderBy('data_emprestimo')->get();

        // Retorna a view com os livros
        return view('usuario_livros.index', ['usuarioLivros' => $usuarioLivros]);
    }

    // Formulário dos livros
    public function create()
    {

        // Busco todos os usuários
        $users = User::get();

        // Busco todos os livros
        $livros = Livros::get();

        // Retorna a view com o formulário
        return view('usuario_livros.form', ['usuarioLivros' => new UsuarioLivros(), 'users' => $users, 'livros' => $livros, 'statusEmprestimo' => StatusEmprestimo::getOptions()]);
    }

    // Formulário dos livros
    public function edit($id)
    {

        // Busca o livro
        $usuarioLivros = UsuarioLivros::find($id);

        // Busco todos os usuários
        $users = User::get();

        // Busco todos os livros
        $livros = Livros::get();

        // Retorna a view com o formulário
        return view('usuario_livros.form', ['usuarioLivros' => $usuarioLivros, 'users' => $users, 'livros' => $livros, 'statusEmprestimo' => StatusEmprestimo::getOptions()]);
    }

    // Salvo os dados do formulário
    public function store(UsuarioLivrosRequest $usuarioLivrosRequest)
    {

        // Validação da informação
        $usuarioLivrosRequest->validated();

        // Persistencia dos dados
        UsuarioLivros::create([
            'user_id' => $usuarioLivrosRequest->user_id,
            'livro_id' => $usuarioLivrosRequest->livro_id,
            'data_emprestimo' => $usuarioLivrosRequest->data_emprestimo,
            'data_devolucao' => $usuarioLivrosRequest->data_devolucao,
            'situacao' => $usuarioLivrosRequest->situacao
        ]);

        // Redireciona para a página inicial
        return redirect()->route('usuario_livros.index')->with('success', 'Livro cadastrado com sucesso!');
    }

    // Atualiza os dados do formulário
    public function update(UsuarioLivrosRequest $usuarioLivrosRequest, $id)
    {

        // Busca o livro no banco
        $usuarioLivro = UsuarioLivros::findOrFail($id);

        // Validação da informação
        $usuarioLivrosRequest->validated();

        // Persistencia dos dados
        $usuarioLivro->update([
            'user_id' => $usuarioLivrosRequest->user_id,
            'livro_id' => $usuarioLivrosRequest->livro_id,
            'data_emprestimo' => $usuarioLivrosRequest->data_emprestimo,
            'data_devolucao' => $usuarioLivrosRequest->data_devolucao,
            'situacao' => $usuarioLivrosRequest->situacao
        ]);

        // Redireciona para a página inicial
        return redirect()->route('usuario_livros.index')->with('success', 'Livro atualizado com sucesso!');
    }

    // Remoção do livro
    public function remove($id)
    {

        // Busca o livro pelo ID
        $usuarioLivro = UsuarioLivros::find($id);

        // Remoção do registro
        $usuarioLivro->delete();

        // Redireciona para a página inicial
        return redirect()->route('usuario_livros.index')->with('success', 'Livro removido com sucesso!');
    }
}
