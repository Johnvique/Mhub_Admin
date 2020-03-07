<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    //
    protected $fillable =[
        'business_name',
        'box_address',
        'location',
        'vision',
        'mission',
        'logo'
    ];
}
