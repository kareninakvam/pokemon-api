@extends('layouts.main')

@section ('title', 'Cadastrar Insignia')

@section ('content')
    <div class="container">
        <form action="/insignias" method ="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="name">Qual o nome dessa insígnia?</label>
                    <input type="text" class="form-control" placeholder="Nome da sua insígnia" id="name" name="name">
                </div><br>
                <div class="form-group col-md-12">
                    <label for="info_pokemon">Como foi a batalha pokemon: </label>
                    <input type="text" class="form-control" placeholder="Exemplo: O dia estava nubloso..." id="info_battle" name="info_battle" >
                </div><br>
                
                <br><button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
@endsection