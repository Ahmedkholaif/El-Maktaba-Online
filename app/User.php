<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Book;
use App\Rating;
use App\Comment;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    // App\User::withTrashed()->find(1)->restore()

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','user_name','national_id','phone', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function favourite_books (){
        return $this->belongsToMany('App\Book','favourite__books');
    }

    public function borrowed_books (){
        return $this->belongsToMany('App\Book','borrowed__books');
    }

    public function comments (){
        return $this->hasMany('App\Comment');
    }

    public function ratings (){
        return $this->hasMany('App\Rating');
    }
}
