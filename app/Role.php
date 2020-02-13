<?php

namespace LaraDex;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * Este metodo nos retorna la relacion que va a tener el usuario
     */
    public function users(){
        return $this->bolongsToMany('App\User');
    }
}
