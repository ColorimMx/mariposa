<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpresaCatalogo extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = "empresa_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';
    public function empresas(){
        return $this->hasOne(EmpleadoCatalogo::class,'empresa_id','id');
    }

    public function sucursales(){
        return $this->hasOne(EmpresaSucursalCatalogo::class,'empresa_id','id');
    }
}
