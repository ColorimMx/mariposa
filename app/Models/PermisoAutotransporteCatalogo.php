<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermisoAutotransporteCatalogo extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = "permiso_autotransporte_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';

    protected $fillable = [

        'id','sat_carta_porte_tipo_permiso_catalogos_id','vigencia','asignado','activo'
    ];

    public function satPermisos(){
        return $this->belongsTo(SatCartaPorteTipoPermisoCatalogo::class, 'sat_carta_porte_tipo_permiso_catalogos_id');
    }
}
