<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable= array('name','description','cover image');
    public funtion photos(){
      return this->hasMany('App\Photo');
    }
}
