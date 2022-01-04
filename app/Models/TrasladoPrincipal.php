<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrasladoPrincipal extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $table = "traslado_principals";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';

    public function trasladodetalles(){
        return $this->hasOne(CartaPorteDetalle::class,'cartaporte_id','id');
    }

    public function moneda(){
        return $this->hasOne(MonedaCatalogo::class,'id','moneda_id');
    }

    public function origen(){
        return $this->hasOne(EmpresaAlmacenCatalogo::class,'id','almacen_id');
    }

    public function destino(){
        return $this->hasOne(EmpresaAlmacenCatalogo::class,'id','destino_almacen_id');
    }
}
