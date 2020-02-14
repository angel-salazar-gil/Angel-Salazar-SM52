<?php

namespace LaraDex\Http\Controllers;

use Illuminate\Http\Request;

class PokemonController extends Controller
{
    /**
     * Retorna la vista en donde mostramos a los Pokémon's
     */
    public function index(Request $request){
        if ($request->ajax()) {
            return response()->json([
                ['id' => 1, 'name' => 'Pokemon', 'description' => 'This is a Pokemon'],
                ['id' => 2, 'name' => 'Pokemon', 'description' => 'This is a Pokemon'],
                ['id' => 3, 'name' => 'Pokemon', 'description' => 'This is a Pokemon'],
            ], 200);
        }
        return view('pokemons.index');
    }

    /**
     * Almacenamos los datos de los pokemons que recibimos
     */
    public function store(Request $request){
        if ($request->ajax()) {
            $pokemon = new Pokemon();
            $pokemon->name = $request->input('name');
            $pokemon->picture = $request->input('picture');
            $pokemon->save();

            return response()->json([
                "message" => "Pokemon credo correctamente"
            ], 200);
        }
    }
}
