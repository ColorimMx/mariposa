<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatCartaPorteTipoPermisoCatalogo extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = "sat_carta_porte_tipo_permiso_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';

    protected $fillable = [
      'id', 'nombre', 'activo'
    ];
}
