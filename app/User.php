<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function widgets() 
    {
        return $this->hasMany('App\Widget'); 
    }

    public function socialProviders() {
        return $this->hasMany('App\SocialProvider'); 
    }

    public function isAdmin() {
        return Auth::user()->is_admin == 1; 
    }

    public function isActiveStatus() {
        return Auth::user()->status_id == 10;
     }


}