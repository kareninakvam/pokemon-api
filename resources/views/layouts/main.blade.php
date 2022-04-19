<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Fontes-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
        <title>@yield('title')</title>
</head>
<!--Barra de navegação -->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/"><img src= "/imgs/logo.png" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            @guest
            <li class="nav-item">
              <a class="nav-link" href="/login">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/register">Registrar</a>
            </li>
            @endguest
            @auth
            <li class="nav-item active">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/pokemons/cadastrar">Adicionar Pokemons</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/insignias/cadastrar">Adicionar Insígnias</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/perfil/edit/">Alterar dados</a>
            </li>
            <li class="nav-item">
              <form action="/logout" method="POST">
                @csrf
                <a class="nav-link"
                    onclick="event.preventDefault();
                    this.closest('form').submit();" 
                     href="/logout">Sair
                </a>
              </form>
            </li>
            @endauth
          </ul>
        </div>
      </nav>
    </header>


    <div class ="background">
        <!--Título -->
        <div class ="title">
            <img src= "/imgs/title.png" alt="Pokemon">
        </div>
    @yield('content')
    </div>


</body>
</html>