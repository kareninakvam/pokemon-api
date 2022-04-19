@extends('layouts.main')

@section ('title', 'POKEMON')

@section ('content')
@guest
<div class ="title">
  <h1>Seja bem vindo!</h1>
</div>
<div class="container">
  <p>Venha ser um treinador pokemon! </p>
  <p><a href="/register">Cadastre-se</a> agora mesmo!</p>
</div>
@endguest

@auth
<div class ="title">
    <h1>Treinador: {{ $user -> name }}</h1>
</div>
<!--Lista de pokemons -->
<div class ="container">
  <p> Para mais informações sobre o pokémon, clique em seu nome. </p> 
</div>
<div class="container">  
@foreach ($pokemons as $pokemon)
    <div class="container-card">
        <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
          <div class="card-header">
            <a href="/pokemons/{{$pokemon -> id}}"> {{ $pokemon -> name}}</a>
          </div>
          <div class="card-body">
            <p class="card-text">{{ $pokemon -> info_pokemon}}</p>
          </div>
        </div>
    </div>
@endforeach
</div>

<!--Lista de insígnias -->
<div class="container"><h2> Sua lista de insígnias:</h2></div>
<div class="container">   
  @foreach ($badges as $badge)
  <div class="container"><p>{{ $badge -> name}}</p></div>
  <div class="container"><p>{{ $badge -> info_battle}}</p></div>
  <div class="container">
    <a href="/insignias/edit/{{ $badge -> id}}" class="btn btn-light" id="bota-edicao">Editar</a>
        <form action ="/insignias/{{ $badge -> id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-light" name="trash-outline">Excluir</button>
        </form>
  </div>
  @endforeach
  @endauth
</div>
@endsection
