@extends('layouts.main')

@section ('title', 'Pokemon')

@section ('content')
    <div class="container">
            <h2>{{$pokemon ->name}}</h2>
    </div>
    <div class="container">
        <p>{{$pokemon ->info_pokemon}}</p>
    </div>
    <div class="container">
        <a href="/pokemons/edit/{{ $pokemon -> id}}" class="btn btn-light" id="bota-edicao">Editar</a>
        <form action ="/pokemons/{{ $pokemon -> id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-light" name="trash-outline">Excluir</button>
        </form>

    </div>
    

@endsection