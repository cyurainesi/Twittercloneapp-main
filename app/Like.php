<?php

namespace App;

use Egulias\EmailValidator\Warning\Comment;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable=['user_id', 'tweet_id', 'liked'];

    public function tweets()
    {
     return $this->belongsTo(Tweet::class);
    }

  
}
