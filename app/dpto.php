<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dpto extends Model
{

	protected $table = 'departamento';
    //

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'codigo_dpto', 'desc_dpto',
    ];

    function material(){

    	return $this->hasMany('App\Material');
    }
}
