<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //Table Name
    protected $table = 'posts';
    //Primary Key
    public $primaryKey ='id';
    //timestamps
    public $foreignKey = 'user_id';
    public $timestamps = true;

    public function user(){
          return $this->belongsTo('App\Models\User');
    }
}
