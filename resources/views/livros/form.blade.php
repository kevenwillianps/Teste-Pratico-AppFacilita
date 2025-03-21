@extends('app')

@section('title', $livros->id > 0 ? 'Editar Livro' : 'Novo Livro')

@section('content')

<div class="fs-1">

    Livros / {{ $livros->id > 0 ? 'Editar' : 'Novo' }}	/ 
    <a href="{{ route('livros.index') }}" class="btn btn-primary btn-sm">

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

    <form action="{{ $livros->id > 0 ? route('livros.update', ['id' => $livros->id]) : route('livros.store') }}" method="POST">
    
        @csrf

        @if($livros->id > 0)
            @method('PUT')
        @else
            @method('POST')
        @endif

            <div class="row g-3">

                <div class="col-md-12">

                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input class="form-control" type="text" id="nome" name="nome" value="{{ old('nome', $livros->nome) }}">
                    </div>

                </div>

                <div class="col-md-12">

                    <div class="form-group">
                        <label for="autor">Autor</label>
                        <input class="form-control" type="text" id="autor" name="autor" value="{{ old('autor', $livros->autor) }}">
                    </div>

                </div>

                <div class="col-md-12">

                    <div class="form-group">

                        <label for="situacao">Situação</label>
                        <select id="situacao" name="situacao" class="form-control">

                            @foreach($StatusLivro as $key => $value)

                                <option value="{{ $key }}">{{ $value }}</option>

                            @endforeach

                        </select>

                    </div>

                </div>

                <div class="col-md-12">

                @foreach($generos as $key => $genero)

                    <div class="form-check">

                        <input class="form-check-input" type="checkbox" value="{{ $genero->id }}" id="genero-{{ $key }}" name="generos[]" {{ isset($livros) && $livros->generos->contains($genero->id) ? 'checked' : '' }}>

                        <label class="form-check-label" for="genero-{{ $key }}">

                            {{ $genero->nome }}

                        </label>
                        
                    </div>

                @endforeach

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