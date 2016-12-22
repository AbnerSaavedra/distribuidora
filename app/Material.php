<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    //
    protected $table = 'materiales';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cod_mat', 'desc_mat', 'dpto', 'foto', 'detalles', 'cantidad_venta', 'precio_venta', 'exitencia',
    ];
}
