<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Página inicial dos usuário
    public function index()
    {

        // Busca todos os usuário
       $user = User::orderBy('name')->get();

        // Retorna a view com os usuário
        return view('user.index', ['user' =>$user]);
    }

    // Formulário dos usuário
    public function create()
    {

        // Retorna a view com o formulário
        return view('user.form', ['user' => new User()]);
    }

    // Formulário dos usuário
    public function edit($id)
    {

        // Busca o genero
       $user = User::find($id);

        // Retorna a view com o formulário
        return view('user.form', ['user' =>$user]);
    }

    // Salvo os dados do formulário
    public function store(UserRequest $userRequest)
    {

        // Validação da informação
       $userRequest->validated();

        // Persistencia dos dados
        User::create([
            'name' => $userRequest->name,
            'email' => $userRequest->email
        ]);

        // Redireciona para a página inicial
        return redirect()->route('user.index')->with('success', 'Usuário cadastrado com sucesso!');
    }

    // Atualiza os dados do formulário
    public function update(UserRequest $userRequest, $id)
    {

        // Busca o genero no banco
        $genero = User::findOrFail($id);

        // Validação da informação
       $userRequest->validated();

        // Persistencia dos dados
        $genero->update([
            'name' => $userRequest->name,
            'email' => $userRequest->email
        ]);

        // Redireciona para a página inicial
        return redirect()->route('user.index')->with('success', 'Usuário atualizado com sucesso!');
    }

    // Remoção do genero
    public function remove($id)
    {

        // Busca o genero pelo ID
        $genero = User::find($id);

        // Remoção do registro
        $genero->delete();

        // Redireciona para a página inicial
        return redirect()->route('user.index')->with('success', 'Usuário removido com sucesso!');
    }
}
