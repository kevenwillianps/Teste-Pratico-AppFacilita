@extends('app')

@section('title', $generos->id > 0 ? 'Editar Gênero' : 'Novo Gênero')

@section('content')

<div class="fs-1">

    Gêneros / {{ $generos->id > 0 ? 'Editar' : 'Novo' }}	/ 
    <a href="{{ route('generos.index') }}" class="btn btn-primary btn-sm">

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

    <form action="{{ $generos->id > 0 ? route('generos.update', ['id' => $generos->id]) : route('generos.store') }}" method="POST">

        @csrf

        @if($generos->id > 0)
            @method('PUT')
        @else
            @method('POST')
        @endif

            <div class="row g-3">

                <div class="col-md-12">

                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input class="form-control" type="text" id="nome" name="nome" value="{{ old('nome', $generos->nome) }}">
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