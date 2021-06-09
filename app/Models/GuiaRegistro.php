<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuiaRegistro extends Model
{
    use HasFactory;
    protected $table = "guia_registros";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';

    public function empleado(){

        return$this->belongsTo(EmpleadoCatalogo::class,'id','id_empleado');
    }

    public function guiaItem(){

        return$this->hasOne(GuiaItemCatalogo::class,'id','id_guia_item');
    }
}
