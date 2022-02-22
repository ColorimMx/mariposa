<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermisoAutotransporteCatalogo extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $fillable = ['id','sat_carta_porte_tipo_permiso_catalogos_id','vigencia','asignado','activo'];
    protected $table = "permiso_autotransporte_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';

    public function permiso(){
        return $this->hasOne(SatCartaPorteTipoPermisoCatalogo::class);
    }
}
