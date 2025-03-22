@extends('app')

@section('title', 'Livros')

@section('content')

<div class="fs-1">

  Livros /

  <a href="{{ route('livros.create') }}" class="btn btn-primary btn-sm">

    + livros

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

        <th colspan="3">

          Operações

        </th>

      </tr>

    </thead>

    <tbody>

      @foreach($livros as $livro)

      <tr>

        <th scope="row">

          {{ $livro->id }}

        </th>

        <td>

          {{ $livro->nome }}

        </td>

        <td>

          {{ $livro->situacao }}

        </td>

        <td>

          <a href="{{ route('livros.edit', ['id' => $livro->id]) }}" class="btn btn-primary btn-sm">

            Editar

          </a>

        </td>

        <td>

          <form action="{{ route('livros.remove', ['id' => $livro->id]) }}" method="post">

            @csrf
            @method('delete')

            <button type="submit" class="btn btn-danger btn-sm">

              Remover

            </button>

          </form>

        </td>

        <td>

          <a href="{{ route('livros.details', ['id' => $livro->id]) }}" class="btn btn-info btn-sm">

            Detalhes

          </a>

        </td>

      </tr>

      @endforeach

    </tbody>

  </table>
  
</div>

@endsection