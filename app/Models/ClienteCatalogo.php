<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use  config\Mba3;
use PDO;

class ClienteCatalogo extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = "cliente_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';

    protected $fillable = [
        'id', 'nombre', 'rfc', 'razon_social', 'fecha_ingreso', 'direccion_principal_1', 'direccion_principal_2', 'direccion_principal_3',
        'num_exterior', 'num_interior', 'colonia', 'municipio', 'localidad', 'ciudad_id', 'estado_id', 'pais_id', 'cp', 'telefono', 'telefono_2',
        'fax', 'email_fiscal', 'e_mail', 'cuenta_id', 'moneda_id', 'dias_credito', 'termino_credito', 'limite_credito', 'saldo', 'reserva', 'zona_id',
        'tipo_id', 'giro_id', 'categoria_id', 'sector_id', 'localizacion_id', 'vendedor_id', 'sat_regimen_fiscal_id', 'activo'
    ];
}
