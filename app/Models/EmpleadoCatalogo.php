<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpleadoCatalogo extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $fillable = ['guia_I','guia_II','guia_III'];
    protected $table = "empleado_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';

    public function empresa(){
        return $this->hasOne(EmpresaCatalogo::class,'id','id_empresa');
    }
    public function guiaregistro(){

        return$this->hasOne(GuiaRegistro::class,'id_empleado','id');
    }
}
