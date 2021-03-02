<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'mail', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    Public function post()
    {
      return $this->hasMany('App\Post');
    }

    public function followers()
    {
      return $this->belongsToMany('App\User', 'follows', 'followed_id', 'following_id');
    }

    public function follows()
    {
      return $this->belongsToMany('App\User', 'follows', 'following_id', 'followed_id');
    }

    // フォローする
    public function follow(Int $user_id)
    {
      return $this->follows()->attach($user_id);
    }

    // フォロー解除する
    public function unfollow(Int $user_id)
    {
      return $this->follows()->detach($user_id);
    }

    // フォローしているか
    public function isFollowing(Int $user_id)
    {
      return (boolean) $this->follows()->where('followed_id', $user_id)->exists();
    }

    // フォローされているか
    public function isFollowed(Int $user_id)
    {
      return (boolean) $this->followers()->where('following_id', $user_id)->exists();
    }
}
