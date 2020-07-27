<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;


/**
 * @method static create(array $array)
 * @method static orderby()
 * @method static find(Cart $cart)
 */
class User extends Authenticatable
{
    use Notifiable;
    protected $table='users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'phone', 'password','address','type'
    ];
    protected $attributes=['type'=>0];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }


}
