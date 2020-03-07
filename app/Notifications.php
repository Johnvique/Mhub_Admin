<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
    //
    protected $fillable =[
        'sender',
        'notice_category',
        'date',
        'message',
        'purpose',
        'status'
    ];
}
