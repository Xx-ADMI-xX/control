<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permisos extends Model
{
    public $timestamps=false;
    protected $table='permisos';
    protected $primaryKey='prm_id';
    protected $fillable = ['prm_detalle'];

    
}
