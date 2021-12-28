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

    public function permiso(){
        return $this->hasOne(PermisoAutotransporteCatalogo::class);
    }

    public function seguro(){
        return $this->hasOne(SeguroAutotransporteCatalogo::class);
    }

    public function configuracion(){
        return $this->hasOne(SatCartaPorteConfigVehicularCatalogo::class);
    }
}
