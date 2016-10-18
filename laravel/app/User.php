<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
      use Notifiable;

    public function exercises(){
        return $this->hasMany('App\Exercise');
    }

    public function roles()
    {
        return $this->belongsToMany('App\Role', 'user_role', 'user_id', 'role_id');
    }
    protected $fillable = [
        'name', 'email', 'password',
    ];

   
    protected $hidden = [
        'password', 'remember_token',
    ];
}
