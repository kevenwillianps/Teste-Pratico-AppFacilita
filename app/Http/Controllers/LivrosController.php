<?php

namespace App\Http\Controllers;

use App\Enums\StatusLivro;
use App\Http\Requests\LivrosRequest;
use App\Models\Generos;
use App\Models\Livros;
use Illuminate\Http\Request;

class LivrosController extends Controller
{

    // Página inicial dos livros
    public function index()
    {

        // Busca todos os livros
        $livros = Livros::orderBy('nome')->get();

        // Retorna a view com os livros
        return view('livros.index', ['livros' => $livros]);
    }

    // Formulário dos livros
    public function create()
    {

        // Busco os generos
        $generos = Generos::orderBy('nome')->get();

        // Retorna a view com o formulário
        return view('livros.form', ['StatusLivro' => StatusLivro::getOptions(), 'generos' => $generos, 'livros' => new Livros()]);
    }

    // Formulário dos livros
    public function edit($id)
    {

        // Busca o livro
        $livro = Livros::findOrFail($id);

        // Busco os generos
        $generos = Generos::orderBy('nome')->get();

        // Retorna a view com o formulário
        return view('livros.form', ['StatusLivro' => StatusLivro::getOptions(), 'generos' => $generos, 'livros' => $livro]);
    }

    // Formulário dos livros
    public function details($id)
    {

        // Busca o livro e os generos vinculados
        $livro = Livros::with('generos')->findOrFail($id);

        // Retorna a view com o formulário
        return view('livros.details', ['livros' => $livro]);
    }


    // Salvo os dados do formulário
    public function store(LivrosRequest $livrosRequest)
    {

        // Validação da informação
        $livrosRequest->validated();

        // Persistencia dos dados
        $livro = Livros::create([
            'nome' => $livrosRequest->nome,
            'autor' => $livrosRequest->autor,
            'situacao' => $livrosRequest->situacao
        ]);

        // Vinculo os generos
        $livro->generos()->sync($livrosRequest->generos);

        // Redireciona para a página inicial
        return redirect()->route('livros.index')->with('success', 'Livro cadastrado com sucesso!');
    }

    // Atualiza os dados do formulário
    public function update(LivrosRequest $livrosRequest, $id)
    {

        // Busca o livro no banco
        $livro = Livros::findOrFail($id);

        // Validação da informação
        $livrosRequest->validated();

        // Persistencia dos dados
        $livro->update([
            'nome' => $livrosRequest->nome,
            'autor' => $livrosRequest->autor,
            'situacao' => $livrosRequest->situacao
        ]);

        // Vinculo os generos
        $livro->generos()->sync($livrosRequest->generos);

        // Redireciona para a página inicial
        return redirect()->route('livros.index')->with('success', 'Livro atualizado com sucesso!');
    }

    // Remoção do livro
    public function remove($id)
    {

        // Busca o livro pelo ID
        $livro = Livros::find($id);

        // Remoção do registro
        $livro->delete();

        // Redireciona para a página inicial
        return redirect()->route('livros.index')->with('success', 'Livro removido com sucesso!');
    }
}
