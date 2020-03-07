<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class System_users extends Model
{
    //
    protected $fillable=[
        'username',
        'email',
        'phone',
        'image',
        'password'
    ];
}
