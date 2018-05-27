<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // 1 Profesión tiene varios usuarios 

    public function users(){
    	return $this::hasMany('User');
    }
}
