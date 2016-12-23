<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    //

    //

    protected $table = 'vendedores';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cod_vend', 'nombre_vend', 'desc_vend', 'direc_vend', 'telefono_vend', 'email_vend', 'zona_vend',
    ];
}
