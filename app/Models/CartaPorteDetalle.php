<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartaPorteDetalle extends Model
{
    use HasFactory;


    protected $table = "carta_porte_detalles";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';

    public function cartaporte(){
        return $this->hasOne(CartaPortePrincipal::class,'id','cartaporte_id');
    }

    public function producto(){
        return $this->hasOne(ProductoCatalogo::class,'id','producto_id');
    }

    public function unidad(){
        return $this->hasOne(UnidadMedidaCatalogo::class,'id','um');
    }

}
