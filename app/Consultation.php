<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    //
    protected $fillable = [
        'user_id', 
        'last_topic',
    ];
  
}
