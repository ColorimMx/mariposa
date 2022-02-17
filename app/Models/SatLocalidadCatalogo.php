<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatLocalidadCatalogo extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = "sat_localidad_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';

    protected $fillable = [
      'id', 'nombre', 'estado_id', 'activo'
    ];

    public function estado(){
        return $this->belongsTo(SatEstadoCatalogo::class);
    }
}
