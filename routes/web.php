<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokedexController;
use App\Http\Controllers\BadgesController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aqui estão todas as rotas do sistema! <3
|
*/

Route::get('/', [PokedexController::class, 'index']);

//ROTAS POKEMON

Route::get('/pokemons/cadastrar', [PokedexController::class, 'create'])->middleware('auth');

Route::post('/pokemons', [PokedexController::class, 'store'])->middleware('auth');

Route::get('/pokemons/{id}', [PokedexController::class, 'show'])->middleware('auth');

Route::delete ('/pokemons/{id}',[PokedexController::class, 'destroy'])->middleware('auth');

Route::get('/pokemons/edit/{id}',[PokedexController::class, 'edit'])->middleware('auth');

Route::put('/pokemons/update/{id}',[PokedexController::class, 'update'])->middleware('auth');


//ROTAS INSIGNIAS

Route::get('/insignias/cadastrar', [BadgesController::class, 'create'])->middleware('auth');


Route::post('/insignias', [BadgesController::class, 'store'])->middleware('auth');


Route::delete ('/insignias/{id}',[BadgesController::class, 'destroy'])->middleware('auth');


Route::get('/insignias/edit/{id}',[BadgesController::class, 'edit'])->middleware('auth');


Route::put('/insignias/update/{id}',[BadgesController::class, 'update'])->middleware('auth');



//ROTA LOGIN, AUTENTICAÇÃO
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect('/');
    })->name('dashboard');
});


// ROTA PARA EDITAR O PERFIL DE USUÁRIO 

Route::get('/perfil/edit/',[UserController::class, 'edit'])->middleware('auth');

Route::put('/perfil/edit/{id}',[UserController::class, 'update'])->middleware('auth');