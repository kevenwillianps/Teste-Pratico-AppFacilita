@extends('app')

@section('title', 'emprestimos')

@section('content')

<div class="fs-1">

  Empréstimos /

  <a href="{{ route('usuario_livros.create') }}" class="btn btn-primary btn-sm">

    + emprestimos

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

      @foreach($usuarioLivros as $usuarioLivro)

      <tr>

        <th scope="row">

          {{ $usuarioLivro->id }}

        </th>

        <td>

          {{ $usuarioLivro->name }}

        </td>

        <td>

          {{ $usuarioLivro->situacao }}

        </td>

        <td>

          <a href="{{ route('usuario_livros.edit', ['id' => $usuarioLivro->id]) }}" class="btn btn-primary btn-sm">

            Editar

          </a>

        </td>

        <td>

          <form action="{{ route('usuario_livros.remove', ['id' => $usuarioLivro->id]) }}" method="post">

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