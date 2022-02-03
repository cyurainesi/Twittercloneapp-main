<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Builder as SchemaBuilder;

class Tweet extends Model
{
    protected $fillable=['user_id', 'body','image', 'gif','replyoption','scheduring'];


     public function user()
    {
        return $this->belongsto(User::class);
    }

    public function scopeWithLikes(Builder $query)
    {
        $query->leftJoinSub(
            'SELECT tweet_id, SUM(liked) likes  FROM likes GROUP BY tweet_id',
            'likes',
            'likes.tweet_id',
            'tweets.id'
        );
    }

#likes
    public function like($user= null )
    {
        return $this->likes()->updateOrCreate([
            'user_id'=>$user ? $user->id : auth()->id,
            'liked'=>true,
        ]
    );
    }


    public function isLikedBy(User $user)
    {

        return (bool) $user->likes
                ->where('tweet_id', $this->id)
                ->where('liked', true)
                ->count();
    }


    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function commentslist()
    {
        $tweetcommet=$this->comments->pluck('tweet_id');
        return Tweet::whereIn('id', $tweetcommet)
        ->latest()->get();
    }

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }

}
