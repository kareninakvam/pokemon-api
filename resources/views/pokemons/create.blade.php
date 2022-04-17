@extends('layouts.main')

@section ('title', 'Cadastrar Pokemon')


@section ('content')
    <div class="container"><br>
        <form action="/pokemons" method ="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="name">Nome:</label>
                    <input type="text" class="form-control" placeholder="Nome do seu pokemon" id="name" name="name">
                </div><br>
                <div class="form-group col-md-12">
                    <label for="info_pokemon">Relate características únicas de seu pokemon: </label>
                    <input type="text" class="form-control" placeholder="Exemplo: muito curioso" id="info_pokemon" name="info_pokemon" >
                </div><br>
                
                <br><button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
@endsection