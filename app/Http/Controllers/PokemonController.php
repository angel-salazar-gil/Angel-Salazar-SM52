<?php

namespace LaraDex\Http\Controllers;
use LaraDex\Pokemon;
use LaraDex\Trainer;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    /**
     * Retorna la vista en donde mostramos a los Pokémon's
     */
    public function index(Request $request){
        if ($request->ajax()) {
            $pokemons = Pokemon::all();
            return response()->json($pokemons, 200);
        }
        return view('pokemons.index');
    }

    public function store(Trainer $trainer, Request $request){
        if ($request->ajax()) {
            $pokemon = new Pokemon();
            $pokemon->name = $request->input('name');
            $pokemon->picture = $request->input('picture');
            $pokemon->description = $request->input('description');
            $pokemon->trainer()->associate($trainer)->save();
            //$pokemon->save();

            return response()->json([
                //"trainer" => $trainer,
                "message" => "Pokemon credo correctamente",
                "pokemon" => $pokemon
            ], 200);
        }
    }
}
