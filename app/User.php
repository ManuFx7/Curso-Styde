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


    // Un usuario pertenece a una profession

    public function profession(){

        return $this->belongsTo('App\Models\Profession');
    }

    public static function findByEmail($email){

        return User::where('email',$email)->first();
    }

    public function isAdmin(){
        return $this->is_admin;
    }
}
