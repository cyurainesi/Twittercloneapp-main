<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class suggestions extends Model
{
    protected $fillable=['username','email','suggestion'];
}
