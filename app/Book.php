<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;
use App\Rating;
use App\Comment;

class Book extends Model
{
    use SoftDeletes;

    public function user_favourite_books () {
        return $this->belongsToMany('App\User','favourite__books');
    }

    public function user_borrowed_books () {
        return $this->belongsToMany('App\User','borrowed__books');
    }

    public function comments () {
        return $this->hasMany('App\Comment');
    }

    public function ratings () {
        return $this->hasMany('App\Rating');
    }

    public function categories () {
        return $this->belongsToMany('App\Category','book__categories');
    }
}
