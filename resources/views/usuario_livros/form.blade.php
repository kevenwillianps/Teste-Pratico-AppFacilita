@extends('app')

@section('title', $usuarioLivros->id > 0 ? 'Editar Emprestimos' : 'Novo Emprestimos')

@section('content')

<div class="fs-1">

    Emprestimos / {{ $usuarioLivros->id > 0 ? 'Editar' : 'Novo' }}	/ 
    <a href="{{ route('usuario_livros.index') }}" class="btn btn-primary btn-sm">

        Fechar

    </a>

</div>

@if($errors->any())

<div class="alert alert-danger">

    <ul>

        @foreach($errors->all() as $error)

        <li>{{ $error }}</li>

        @endforeach

    </ul>

</div>

@endif

<div class="card">

    <div class="card-body">

    <form action="{{ $usuarioLivros->id > 0 ? route('usuario_livros.update', ['id' => $usuarioLivros->id]) : route('usuario_livros.store') }}" method="POST">

        @csrf

        @if($usuarioLivros->id > 0)
            @method('PUT')
        @else
            @method('POST')
        @endif

            <div class="row g-3">

                <div class="col-md-12">

                    <div class="form-group">

                        <label for="user_id">Cliente</label>
                        <select id="user_id" name="user_id" class="form-control">

                            @foreach($users as $key => $user)

                                <option value="{{ $user->id }}" {{ $user->id ==  $usuarioLivros->user_id ? 'selected' : ''}}>{{ $user->name }}</option>

                            @endforeach

                        </select>

                    </div>

                </div>

                <div class="col-md-12">

                    <div class="form-group">

                        <label for="livro_id">Livro</label>
                        <select id="livro_id" name="livro_id" class="form-control">

                            @foreach($livros as $key => $livro)

                                <option value="{{ $livro->id }}" {{ $livro->id == $usuarioLivros->livro_id ? 'selected' : ''}}>{{ $livro->nome }}</option>

                            @endforeach

                        </select>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group">
                        <label for="data_emprestimo">Empréstimo</label>
                        <input class="form-control" type="date" id="data_emprestimo" name="data_emprestimo" value="{{ old('data_emprestimo', $usuarioLivros->data_emprestimo) }}">
                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group">
                        <label for="data_devolucao">Devolução</label>
                        <input class="form-control" type="date" id="data_devolucao" name="data_devolucao" value="{{ old('data_devolucao', $usuarioLivros->data_devolucao) }}">
                    </div>

                </div>

                <div class="col-md-12">

                    <div class="form-group">

                        <label for="situacao">Situação</label>
                        <select id="situacao" name="situacao" class="form-control">

                            @foreach($statusEmprestimo as $key => $value)

                                <option value="{{ $key }}" {{ $key == $usuarioLivros->situacao ? 'selected' : ''}}>{{ $value }}</option>

                            @endforeach

                        </select>

                    </div>

                </div>

                <div class="col-md-12">

                    <button type="submit" class="btn btn-primary">

                        Enviar

                    </button>

                </div>

            </div>

        </form>

    </div>

</div>

@endsection