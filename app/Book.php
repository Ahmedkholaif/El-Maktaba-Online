<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Book extends Model
{
    public function user_favourite_books () {
        return $this->belongsToMany('App\User','favourite__books');
    }
}
