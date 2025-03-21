<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <!-- Meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ config('app.name') }}</title>
  <!-- CSS compilado -->
  {{-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom shadow-sm">

    <div class="container">

      <a class="navbar-brand" href="#">

        <>

      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>

      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">

            <a class="nav-link active" aria-current="page" href="{{ route('livros.index') }}">

              Livros

            </a>

          </li>

          <li class="nav-item">

            <a class="nav-link" aria-current="page" href="{{ route('generos.index') }}">

              Generos

            </a>

          </li>

          <li class="nav-item">

            <a class="nav-link" aria-current="page" href="{{ route('usuario_livros.index') }}">

              Empréstimos

            </a>

          </li>

        </ul>

      </div>

    </div>

  </nav>

  <div class="container">

    @yield('content')

  </div>

  <!-- JS compilado -->
  {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>

</html>