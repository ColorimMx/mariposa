<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnidadMedidaCatalogo extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = 'unidad_medida_catalogos';
    protected $dateFormat = 'Y-m-d\TH:i:s.v';

    public function satum(){
        return $this->hasOne(SatUnidadCatalogo::class,'id','sat_unidad_id');
    }
}
