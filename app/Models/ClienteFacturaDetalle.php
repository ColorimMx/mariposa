<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteFacturaDetalle extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = "cliente_factura_detalle";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';

    protected $fillable = [
        'id', 'factura_id', 'linea', 'producto_id', 'cantidad', 'precio', 'subtotal', 'iva', 'divisa_valor',
        'subtotal_mn', 'iva_mn'

    ];
}
