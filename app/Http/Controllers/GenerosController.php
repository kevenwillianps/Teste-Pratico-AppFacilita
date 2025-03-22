<?php

namespace App\Http\Controllers;

use App\Http\Requests\GenerosRequest;
use App\Models\Generos;
use Illuminate\Http\Request;

class GenerosController extends Controller
{

    // Página inicial dos generos
    public function index()
    {

        // Busca todos os generos
        $generos = Generos::orderBy('nome')->get();

        // Retorna a view com os generos
        return view('generos.index', ['generos' => $generos]);
    }

    // Formulário dos generos
    public function create()
    {

        // Retorna a view com o formulário
        return view('generos.form', ['generos' => new Generos()]);
    }

    // Formulário dos generos
    public function edit($id)
    {

        // Busca o genero
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
        return redirect()->route('generos.index')->with('success', 'genero cadastrado com sucesso!');
    }

    // Atualiza os dados do formulário
    public function update(GenerosRequest $generosRequest, $id)
    {

        // Busca o genero no banco
        $genero = Generos::findOrFail($id);

        // Validação da informação
        $generosRequest->validated();

        // Persistencia dos dados
        $genero->update([
            'nome' => $generosRequest->nome
        ]);

        // Redireciona para a página inicial
        return redirect()->route('generos.index')->with('success', 'genero atualizado com sucesso!');
    }

    // Remoção do genero
    public function remove($id)
    {

        // Busca o genero pelo ID
        $genero = Generos::find($id);

        // Remoção do registro
        $genero->delete();

        // Redireciona para a página inicial
        return redirect()->route('generos.index')->with('success', 'genero removido com sucesso!');
    }
}
