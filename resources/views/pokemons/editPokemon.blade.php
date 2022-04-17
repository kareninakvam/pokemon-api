@extends('layouts.main')

@section ('title', 'Cadastrar Pokemon')


@section ('content')
    <div class="container"><h1>Editando: {{ $pokemon->name }} </h1></div>
    <div class="container">
        <form action="/pokemons/update/{{ $pokemon-> id }}" method ="POST">
            @csrf
            @method('PUT')
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="name">Nome:</label>
                    <input type="text" class="form-control"  id="name" name="name" value="{{ $pokemon-> name }}">
                </div><br>
                <div class="form-group col-md-12">
                    <label for="info_pokemon">Relate características únicas de seu pokemon: </label>
                    <input type="text" class="form-control"  id="info_pokemon" name="info_pokemon"  value="{{ $pokemon-> info_pokemon }}">
                </div><br>
                <br><button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
@endsection