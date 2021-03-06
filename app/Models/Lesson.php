<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Time;
class Lesson extends Model
{
	protected $guarded = [];

	public function tutor(){
		return $this->belongsTo(User::class,'user_id','id');
      
	}
	public function times(){
    	return $this->hasMany(Time::class);
    }


	
}

