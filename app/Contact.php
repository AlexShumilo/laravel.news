<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'cont_name', 'cont_email', 'cont_phone', 'cont_message'
    ];
}
