<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Book;

class Comment extends Model
{
    protected $fillable =['body', 'book_id', 'user_id'];
    public function user () {
        return $this->belongsTo('App\User');
    }

    public function book () {
        return $this->belongsTo('App\Book');
    }

}
