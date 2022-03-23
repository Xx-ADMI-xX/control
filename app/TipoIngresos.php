<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoIngresos extends Model
{
    public $timestamps=false;
    protected $table='tipoingresos';
    protected $primaryKey='tpI_id';
    protected $fillable = ['tpI_Nombre'];

    
}
