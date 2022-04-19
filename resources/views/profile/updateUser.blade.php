@extends('layouts.main')

@section ('title', 'Editar Insignia')

@section ('content')
<div class="container"><h2>Editando: {{ $user->name }} </h2></div>
<div class="container">
    <form action="/perfil/edit/{{ $user-> id }}" method ="POST">
        @csrf
        @method('PUT')
            <div class="form-row">
                <div class="form-group col-md-16">
                    <label for="name">Altere seu nome:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$user -> name}}">
                </div><br>
                <div class="form-group col-md-12">
                    <label for="info_pokemon">Altere sua senha: </label>
                    <input type="password" class="form-control" id="password" name="password">
                </div><br>
                
                <br><button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
@endsection