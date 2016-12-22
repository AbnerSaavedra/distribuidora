<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class departamento extends Model
{
    //

    function material(){

    	return $this->hasMany('App\Material');
    }
}
