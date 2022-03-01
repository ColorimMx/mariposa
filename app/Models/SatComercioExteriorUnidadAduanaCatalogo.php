<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatComercioExteriorUnidadAduanaCatalogo extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = "sat_comercio_exterior_unidad_aduana_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';
}
