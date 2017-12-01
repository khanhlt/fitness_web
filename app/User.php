<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
        'name', 'email', 'user_name', 'purpose', 'birthday', 'address', 'weight', 'job', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // user has many posts
    public function posts() {
        return $this->hasMany('App\Posts', 'author_id');
    }

    // user has many comments 
    public function comments() {
        return $this->hasMany('App\PostComments', 'from_user');
    }
}
