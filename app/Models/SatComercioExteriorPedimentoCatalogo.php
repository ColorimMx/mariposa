<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatComercioExteriorPedimentoCatalogo extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = "sat_comercio_exterior_pedimento_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';
}
