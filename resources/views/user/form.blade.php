@extends('app')

@section('title', $user->id > 0 ? 'Editar Gênero' : 'Novo Gênero')

@section('content')

<div class="fs-1">

    Gêneros / {{ $user->id > 0 ? 'Editar' : 'Novo' }}	/ 
    <a href="{{ route('user.index') }}" class="btn btn-primary btn-sm">

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

    <form action="{{ $user->id > 0 ? route('user.update', ['id' => $user->id]) : route('user.store') }}" method="POST">

        @csrf

        @if($user->id > 0)
            @method('PUT')
        @else
            @method('POST')
        @endif

            <div class="row g-3">

                <div class="col-md-12">

                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input class="form-control" type="text" id="name" name="name" value="{{ old('name', $user->name) }}">
                    </div>

                </div>

                <div class="col-md-12">

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" id="email" name="email" value="{{ old('email', $user->email) }}">
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