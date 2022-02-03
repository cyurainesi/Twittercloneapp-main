<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookMark extends Model
{
protected $fillable=['user_id', 'tweet_id'];


public function user()
{
    return $this->belongsto(User::class);
}

}
