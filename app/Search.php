<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    protected $fillable=['search'];

    public function user()
    {
        return $this->belongsto(User::class);
    }

}
