<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follows extends Model
{
   protected $fillable=['user_id','following_user_id'];
}
