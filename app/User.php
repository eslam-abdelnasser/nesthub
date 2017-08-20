<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models;

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

    public function viewing_requests()
    {
        return $this->hasMany(Viewing_request::class);
    }
    public function providing_requests()
    {
        return $this->hasMany(Providing_request::class);
    }
    public function buildings()
    {
        return $this->hasOne(Building::class );
    }
}
