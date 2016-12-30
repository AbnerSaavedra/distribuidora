<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Storage;

use File;

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
        'cod_mat', 'desc_mat', 'dpto', 'foto', 'detalles', 'cantidad_venta', 'precio_venta', 'exitencia', 'path',
    ];

    public function setPathAttribute($path){
            if (!empty($path)) {
                # code...
                $this->attributes['path'] = time().'_'.$path->getClientOriginalName();
                $name = time().'_'.$path->getClientOriginalName();
                \Storage::disk('local')->put($name, \File::get($path));
            }
    }

    

    public function scopeCodmat($query, $cod_mat){

        //dd('scope '. $cod_mat);
        if (trim($cod_mat) != "") {
            # code...
            $query->where('cod_mat', "LIKE", "%$cod_mat%");
        }
    }
}
