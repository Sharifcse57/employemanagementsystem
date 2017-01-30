<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;

class Employee extends Authenticatable
{
    public $timestamps = false;
     protected $fillable = [
         'username', 'password',
    ];


     protected $hidden = [
        'password', 'remember_token',
    ];
}
