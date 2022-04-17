<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pokemon;
use App\Models\Badge;

class PokedexController extends Controller
{
    public function index(){
       
        $pokemons = Pokemon::all();
        $badges = Badge::all();

        return view('home', ['pokemons' => $pokemons, 'badges' => $badges]);
    }

    public function create(){
        return view ('pokemons.create');
    }

    public function store(Request $request){

        $pokemon = new Pokemon;
        $pokemon->name = $request->name;
        $pokemon->info_pokemon = $request->info_pokemon;

        //if ($request->hasFile('image') && $request->file('image')->isValid()){
        //    $requestImage = $request->image;
        //    $extension = $requestImage->extension();
         //   $imageName = md5($requestImage->getClientOriginalName() . strtotime("now"))  . "." . $extension;
         //   $requestImage->image->move(public_path('imgs/pokemons'), $imageName);
         //   $event->image=$imageName;
       // }

        $pokemon-> save();

        return redirect ('/');
    }

    public function show($id){
        $pokemon = pokemon::findOrFail($id); 
        return view('pokemons.pokemon', ['pokemon' => $pokemon]);
    }

    public function destroy($id){
        $pokemon = pokemon::findOrFail($id)->delete();
        return redirect ('/');
    }

    public function edit($id){
        $pokemon = pokemon::findOrFail($id); 
        return view('pokemons.editPokemon', ['pokemon' => $pokemon]);
    }

    public function update(Request $request){
        Pokemon::findOrFail($request->id)->update($request->all());
        return redirect ('/');
    }
}
