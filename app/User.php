<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    
	protected $dates = ['date_of_birth'];
	
	public function expectedLocations() {
		return $this->belongsToMany('App\MasterLocation', 'user_expected_locations', 'user_id','location_id');
	}
	public function skillSets() {
		return $this->belongsToMany('App\MasterSkillSet', 'user_skill_sets', 'user_id' , 'skill_set_id');
	}
	public function expectedFacilities() {
		return $this->belongsToMany('App\MasterFacility', 'user_expected_facilities', 'user_id' , 'facility_id');
	}
	public function lastDegree() {
		return $this->belongsTo('App\MasterDegree','last_degree_id');
	}
	
	public function major() {
		return $this->belongsTo('App\MasterMajor','major_id');
	}
}
