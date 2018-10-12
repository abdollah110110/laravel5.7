<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Activation;
use App\Events\ResetPasswordEvent;

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
    
    public function isAdmin()
    {
        return $this->level == 'admin' ? true : false;
    }
    
    public function activations() {
        return $this->hasMany(Activation::class);
    }
    
    public function sendPasswordResetNotification($token)
    {
        event(new ResetPasswordEvent($this->name, $this->email, $token));
    }
    
}
