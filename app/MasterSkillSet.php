<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterSkillSet extends Model
{
    //
    protected $fillable = [
        'name',
    ];
    
    public function Users() {
		return $this->belongsToMany('App\User', 'user_skill_sets');
	}
}
