<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Exercise extends Model


    /**
     * Exercise worden gemaakt door users
     * Exercise is van die User en niet van een ander
     */
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
