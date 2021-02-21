<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    //Table Name
    protected $table = 'events';
    //Primary Key
    public $primaryKey ='id';
    //timestamps
    public $timestamps = true;

    public function user(){
          return $this->belongsTo('App\Models\User');
    }
    public function record()
    {
        return $this->belongsTo('App\Models\Child');
    }
   
}
