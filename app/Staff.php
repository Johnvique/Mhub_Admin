<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //
    protected $fillable=[
        'name',
        'email',
        'phone',
        'id_no',
        'employee_no',
        'location',
        'gender',
        'position',
        'image'
    ];
}
