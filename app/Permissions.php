<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    //
    protected $fillable =[
        'display_name',
        'description'
    ];
}
