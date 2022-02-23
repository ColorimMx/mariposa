<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatTipoRelacionCatalogo extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $table = "sat_tipo_relacion_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';

    protected $fillable = [
      'id', 'nombre', 'activo'
    ];
}
