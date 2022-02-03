<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Builder;

class Comments extends Model
{
    protected $fillable=['user_id','tweet_id','comment','image','gif'];

    public function tweets()
    {
        return $this->belongsTo(Tweet::class);
    }

    public function reply()
    {
        return $this->hasMany(Reply::class,'user_id','tweet_id','comment_id','reply','image','gif');
    }

    public function likecomment()
    {
        return $this->hasMany(Likecomment::class, 'user_id', 'comment_id', 'liked');
    }

    public function likedcomment()
    {
        return $this->likecomment()->updateOrCreate([
            'user_id'=>auth()->user()->id,
            'liked'=>true,
        ]
    );
    }

}
