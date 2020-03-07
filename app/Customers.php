<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    //
    protected $fillable=[
        'name',
        'email',
        'phone',
        'location',
        'message',
        'image'
    ];
}
