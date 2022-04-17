<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokedexController;
use App\Http\Controllers\BadgesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aqui estão todas as rotas! <3
|
*/

Route::get('/', [PokedexController::class, 'index']);

//ROTAS POKEMON

Route::get('/pokemons/cadastrar', [PokedexController::class, 'create']);

Route::post('/pokemons', [PokedexController::class, 'store']);

Route::get('/pokemons/{id}', [PokedexController::class, 'show']);

Route::delete ('/pokemons/{id}',[PokedexController::class, 'destroy']);

Route::get('/pokemons/edit/{id}',[PokedexController::class, 'edit']);

Route::put('/pokemons/update/{id}',[PokedexController::class, 'update']);


//ROTAS INSIGNIAS

Route::get('/insignias/cadastrar', [BadgesController::class, 'create']);

Route::post('/insignias', [BadgesController::class, 'store']);

Route::delete ('/insignias/{id}',[BadgesController::class, 'destroy']);

Route::get('/insignias/edit/{id}',[BadgesController::class, 'edit']);

Route::put('/insignias/update/{id}',[BadgesController::class, 'update']);