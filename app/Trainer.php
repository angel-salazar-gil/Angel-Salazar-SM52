<?php

namespace LaraDex;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    protected $fillable = ['name', 'avatar', 'descripcion'];

    /**
    * Get the route key for the model.
    *
    * @return string
    */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Espesificamos la relacion de los entrenadores a los Pokemons
     */
    public function pokemons()
    {
        return $this->hasMany('LaraDex\Pokemon');
    }
}
