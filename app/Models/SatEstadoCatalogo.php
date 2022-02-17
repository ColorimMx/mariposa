<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatEstadoCatalogo extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = "sat_estado_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';

    protected $fillable = [
        'id', 'nombre', 'pais_id', 'activo'
    ];


    public function pais(){
        return $this->belongsTo(SatPaisCatalogo::class);
    }

    public function municipio(){
        return $this->hasMany(SatMunicipioCatalogo::class);
    }

    public function localidad(){
        return $this->hasMany(SatLocalidadCatalogo::class);
    }
}
