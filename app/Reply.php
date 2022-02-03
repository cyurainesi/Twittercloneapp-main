<?php

namespace App;

use Egulias\EmailValidator\Warning\Comment;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $fillable=['user_id','tweet_id','comment_id','reply','image','gif'];

    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
