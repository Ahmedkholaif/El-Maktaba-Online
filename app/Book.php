<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;
use App\Rating;
use App\Comment;
use App\Category;


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

<<<<<<< HEAD
    public function categories(){
=======
    public function categories () {
>>>>>>> 4e3e736685ef142e20f2c81511a5e37503d61fc6
        return $this->belongsToMany('App\Category','book__categories');
    }
    // public function categories(){
    //     return $this->belongsToMany(Category::class);
    // }

    protected $fillable = ['title','author','description','image','copies_number','fees_per_day'];
}
