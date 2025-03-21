@extends('app')

@section('title', $livros->id > 0 ? 'Editar Livro' : 'Novo Livro')

@section('content')

<div class="fs-1">

    Livros / Detalhes	/ 
    <a href="{{ route('livros.index') }}" class="btn btn-primary btn-sm">

        Fechar

    </a>

</div>

<div class="card">

    <div class="card-body">

        <div class="fs-4">

            Título: <b>{{ $livros->nome }}</b>

            <span class="badge bg-primary">

                {{ $livros->situacao }}

            </span>

        </div>

        <div class="fs-4">

            Autor: <b>{{ $livros->autor }}</b>

        </div>

        <hr>

        <div class="fs-5">

            Gêneros:

        </div>
        
        <form action="{{ route('livros.generos.store', ['id' => $livros->id]) }}" method="post">

            @foreach($livros->generos as $key => $genero)

                <span class="badge bg-primary">

                    {{ $genero->nome }}

                </span>

            @endforeach

        </form>

    </div>

</div>

@endsection