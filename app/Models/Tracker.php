<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tracker extends Model
{
    protected $guarded = [ ];
    
   public function tutor()
  {
  	return $this->belongsTo(User::class);
  }
   public function user()
  {
  	return $this->belongsTo(User::class);
  }
}
