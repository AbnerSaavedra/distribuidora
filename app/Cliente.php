<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //

    protected $table = 'clientes';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cod_cli', 'nombre_cli', 'desc_cli', 'direc_cli', 'telefono_cli', 'email_cli', 'zona_cli',
    ];
}
