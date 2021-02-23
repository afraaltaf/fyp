<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use HasFactory;
   
    //Table Name
    protected $table = 'child_record';
    //Primary Key
    public $primaryKey ='id';
    //timestamps
    public $timestamps = true;

    public function user(){
          return $this->belongsTo('App\Models\User');
    }
    
    
}
