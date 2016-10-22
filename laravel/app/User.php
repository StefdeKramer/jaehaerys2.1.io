<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function exercises()
    {
        return $this->hasMany('App\Exercise');
    }

    public function roles()
    {
        return $this->belongsToMany('App\Role', 'user_role', 'user_id', 'role_id');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }



    public function hasAnyRole($roles)
    {
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

    public function hasRole($role){
        if($this->roles()->where('name', $role)->first()) {
            return true;
        }
        return false;
    }

    protected $fillable = [
        'name', 'email', 'password',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];
}
