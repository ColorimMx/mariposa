<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutotransporteCatalogo extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = "autotransporte_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';

    protected $fillable = [
        'id', 'marca', 'modelo', 'anio_modelo_vm', 'placa', 'permiso_autotransporte_id', 'config_vehicular_id', 'asegura_resp_civil_id'
    ];

    public function permiso(){
        return $this->hasOne(PermisoAutotransporteCatalogo::class);
    }

    public function seguro(){
        return $this->hasOne(SeguroAutotransporteCatalogo::class);
    }

    public function configuracion(){
        return $this->hasMany(SatCartaPorteConfigVehicularCatalogo::class);
    }
}
