<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    //
    protected $fillable =[
        'title',
        'description',
        'category',
        'phone',
        'assigned_date',
        'due_date',
        'charge'
    ];
}
