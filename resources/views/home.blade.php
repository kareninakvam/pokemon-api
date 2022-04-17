@extends('layouts.main')

@section ('title', 'POKEMON')

@section ('content')
<div class ="title">
    <h1>Treinador: Fulano</h1>
</div>

<!--Lista de pokemons -->
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
<div class="container"><h2> Sua lista de insígnias: </h2></div>
<div class="container">   
  @foreach ($badges as $badge)
  <div class="container">{{ $badge -> name}}</div>
  <div class="container">{{ $badge -> info_battle}}</div>
  <div class="container">
    <a href="/insignias/edit/{{ $badge -> id}}" class="btn btn-light" id="bota-edicao">Editar</a>
        <form action ="/insignias/{{ $badge -> id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-light" name="trash-outline">Excluir</button>
        </form>
  </div>

  @endforeach
</div>
@endsection
