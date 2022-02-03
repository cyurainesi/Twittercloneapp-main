<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Likecomment extends Model
{
    protected $fillable=['user_id', 'comment_id', 'liked'];

    public function comment()
    {
     return $this->belongsTo(Comment::class);
    }
}
