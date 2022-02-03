<?php

namespace App;
use App\Tweet;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username','bio','website','birthdate','email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password']=bcrypt($value);
    }

    public function timeline()
    {
        $friends=$this->follows->pluck('id');
        return Tweet::whereIn('user_id', $friends)
                    ->orWhere('user_id', $this->id)
                    ->withlikes()
                    ->latest()->get();
    }


    public function tweets()
    {
        return $this->hasMany(Tweet::class)->latest();
    }


    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }

    public function unfollow(User $user)
    {
        return $this->follows()->detach($user);
    }

    public function follows()
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }

    public function following(User $user)
    {
        return $this->follows->contains($user);
    }

    public function followinglist(User $user)
    {
        $friends=$this->follows->pluck('id');
        return follows::whereIn('user_id',$user);
    }

    public function follower(User $user)
    {
        $friends=$this->follows->pluck('id');
        return follows::whereIn('following_user_id',$user);
    }



     public function bookmarktimeline()
     {
        $user=auth()->user()->id;
        $tweetbookmark=$this->bookmark->pluck('tweet_id');
        return Tweet::whereIn('id', $tweetbookmark)
        ->withlikes()
        ->latest()->get();
     }

     public function bookmark()
     {
         return $this->hasMany(BookMark::class);
     }


     public function search()
    {
        return $this->hasMany(search::class);
    }

     public function getRouteKeyName()
     {
         return 'name';
     }


}
