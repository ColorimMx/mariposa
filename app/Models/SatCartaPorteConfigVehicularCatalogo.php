<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatCartaPorteConfigVehicularCatalogo extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = "sat_carta_porte_config_vehicular_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';

    protected $fillable = [
        'id', 'nombre', 'activo'
    ];

    public function autotransporte(){
        return $this->belongsTo(AutotransporteCatalogo::class);
    }
}
