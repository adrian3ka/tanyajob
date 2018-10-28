<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterFacility extends Model
{
    //
    protected $fillable = [
        'name',
    ];
    
    public function Users() {
		return $this->belongsToMany('App\User', 'user_expected_facilities');
	}
}
