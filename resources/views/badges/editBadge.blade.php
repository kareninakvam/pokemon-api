@extends('layouts.main')

@section ('title', 'Editar Insignia')

@section ('content')
<div class="container"><h2>Editando: {{ $badge->name }} </h2></div>
<div class="container">
    <form action="/insignias/update/{{ $badge-> id }}" method ="POST">
        @csrf
        @method('PUT')
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="name">Qual o nome dessa insígnia?</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$badge -> name}}">
                </div><br>
                <div class="form-group col-md-12">
                    <label for="info_pokemon">Como foi a batalha pokemon: </label>
                    <input type="text" class="form-control" id="info_battle" name="info_battle" value="{{$badge -> info_battle}}">
                </div><br>
                
                <br><button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
@endsection