<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatComercioExteriorTipoOperacionCatalogo extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = "sat_comercio_exterior_tipo_operacion_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';
}
