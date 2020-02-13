<?php

namespace LaraDex;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * Este metodo debuelve la relacion o el resultado de la relacion
     * Retorna el rol que tendrá el usuario
     */
    public function roles(){
        return $this->belongsToMany('LaraDex\Role');
    }

    /**
     * Resive los roles de los usuarios y valida ...
     * De no ser que tenga un rol en el sistema se devuelve un error "401"
     */
    public function authorizeRoles($roles){
        if ($this->hasAnyRole($roles)) {
            return true;
        }
        abort(401, 'This acction is unauthirized');
    }

    /**
     * Un usuario puede tener varios roles ...
     * Por este motivo validamos si es que los roles que nos regresa es un array o no
     */
    public function hasAnyRole($roles){
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRole($role)) {
                    return true;
                }
            }
        } else {
            if ($this->hasRole($roles)) {
                return true;
            }
        }
        return false;
    }

    /**
     * Validamos si el usuario cunta con un rol en el sistema
     */
    public function hasRole($role){
        if ($this->roles()->where('name',$role)->first()) {
            return true;
        }
        return false;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
