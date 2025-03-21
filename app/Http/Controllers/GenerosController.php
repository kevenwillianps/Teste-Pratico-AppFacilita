<?php

namespace App\Http\Controllers;

use App\Http\Requests\GenerosRequest;
use App\Models\Generos;
use Illuminate\Http\Request;

class GenerosController extends Controller
{

    // Página inicial dos livros
    public function index()
    {

        // Busca todos os livros
        $generos = Generos::orderBy('nome')->get();

        // Retorna a view com os livros
        return view('generos.index', ['generos' => $generos]);
    }

    // Formulário dos livros
    public function create()
    {

        // Retorna a view com o formulário
        return view('generos.form', ['generos' => new Generos()]);
    }

    // Formulário dos livros
    public function edit($id)
    {

        // Busca o livro
        $generos = Generos::find($id);

        // Retorna a view com o formulário
        return view('generos.form', ['generos' => $generos]);
    }

    // Salvo os dados do formulário
    public function store(GenerosRequest $generosRequest)
    {

        // Validação da informação
        $generosRequest->validated();

        // Persistencia dos dados
        Generos::create([
            'nome' => $generosRequest->nome
        ]);

        // Redireciona para a página inicial
        return redirect()->route('generos.index')->with('success', 'Livro cadastrado com sucesso!');
    }

    // Atualiza os dados do formulário
    public function update(GenerosRequest $generosRequest, $id)
    {

        // Busca o livro no banco
        $genero = Generos::findOrFail($id);

        // Validação da informação
        $generosRequest->validated();

        // Persistencia dos dados
        $genero->update([
            'nome' => $generosRequest->nome
        ]);

        // Redireciona para a página inicial
        return redirect()->route('generos.index')->with('success', 'Livro atualizado com sucesso!');
    }

    // Remoção do livro
    public function remove($id)
    {

        // Busca o livro pelo ID
        $livro = Generos::find($id);

        // Remoção do registro
        $livro->delete();

        // Redireciona para a página inicial
        return redirect()->route('generos.index')->with('success', 'Livro removido com sucesso!');
    }
}
