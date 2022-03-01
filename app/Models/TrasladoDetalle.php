<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrasladoDetalle extends Model
{
    use HasFactory;

    protected $table = "traslado_detalles";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';

    public function traslado(){
        return $this->hasOne(CartaPortePrincipal::class,'id','traslado_id');
    }

    public function producto(){
        return $this->hasOne(ProductoCatalogo::class,'id','producto_id');
    }

    public function unidad(){
        return $this->hasOne(UnidadMedidaCatalogo::class,'id','um');
    }
}
