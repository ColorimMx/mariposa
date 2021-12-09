<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatCartaPorteSubTipoRemCatalogo extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = "sat_carta_porte_sub_tipo_rem_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';
}
