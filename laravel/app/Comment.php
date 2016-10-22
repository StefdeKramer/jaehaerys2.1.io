<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function exercise(){
        return $this->belongsTo('App\Exercise');
    }
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
