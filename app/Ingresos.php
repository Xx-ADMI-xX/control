<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingresos extends Model
{
    public $timestamps=false;
    protected $table='ingresos';
    protected $primaryKey='ing_id';
    protected $fillable = [
        'ing_cantidad','ing_detalle','ing_fecha', 'usu_id','tpI_id'
    ];
}
