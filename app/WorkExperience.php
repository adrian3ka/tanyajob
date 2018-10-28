<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    public function industry()
    {
        return $this->hasOne('App\MasterIndustry','id','industry_id');
    }
    
    public function location()
    {
        return $this->hasOne('App\MasterLocation','id','location_id');
    }
}
