<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterLocation extends Model
{
    //
    protected $fillable = [
        'name',
    ];
    
	public function Users() {
		return $this->belongsToMany('App\User', 'user_expected_locations','user_id', 'location_id');
	}
}
