<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoCatalogo extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = "producto_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';

    public function satproducto(){
        return $this->hasOne(SatProductoServicioCatalogo::class,'id','sat_producto_servicio_id');
    }

    public function unidad(){
        return $this->hasOne(UnidadMedidaCatalogo::class,'id','um');
    }
}
