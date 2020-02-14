<?php

namespace LaraDex\Http\Controllers;

use Illuminate\Http\Request;

class PokemonController extends Controller
{
    /**
     * Retorna la vista en donde mostramos a los Pokémon's
     */
    public function index(){
        return view('pokemons.index');
    }
}
