<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <!-- Meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ config('app.name') }}</title>
  <!-- CSS compilado -->
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom shadow-sm">

    <div class="container">

      <a class="navbar-brand" href="#">

        📕

      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>

      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">

            <a class="nav-link active" aria-current="page" href="{{ route('user.index') }}">

              Usuários

            </a>

          </li>

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

</body>

</html>