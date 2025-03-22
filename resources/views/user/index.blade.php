@extends('app')

@section('title', 'Usuários')

@section('content')

<div class="fs-1">

  Usuários /

  <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm">

    + Usuário

  </a>

</div>

<div class="card">

  <table class="table">

    <thead>

      <tr>

        <th scope="col">

          #

        </th>

        <th scope="col">

          Nome

        </th>

        <th scope="col">

          Situação

        </th>

        <th colspan="2">

          Operações

        </th>

      </tr>

    </thead>

    <tbody>

      @foreach($user as $livro)

      <tr>

        <th scope="row">

          {{ $livro->id }}

        </th>

        <td>

          {{ $livro->name }}

        </td>

        <td>

          {{ $livro->email }}

        </td>

        <td>

          <a href="{{ route('user.edit', ['id' => $livro->id]) }}" class="btn btn-primary btn-sm">

            Editar

          </a>

        </td>

        <td>

          <form action="{{ route('user.remove', ['id' => $livro->id]) }}" method="post">

            @csrf
            @method('delete')

            <button type="submit" class="btn btn-danger btn-sm">

              Remover

            </button>

          </form>

        </td>

      </tr>

      @endforeach

    </tbody>

  </table>

</div>

@endsection