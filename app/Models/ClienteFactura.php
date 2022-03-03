<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteFactura extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = "cliente_factura";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';

    protected $fillable = [
        'id', 'numero', 'serie', 'prefijo', 'folio', 'tipo', 'cliente_id', 'fecha', 'fecha_vencimiento', 'cambio_valor',
        'moneda_id', 'subtotal', 'descuento', 'impuesto', 'total', 'pago', 'saldo', 'condiciones_pago', 'dia', 'mes', 'anio',
        'info_creacion', 'info_confirmado', 'info_anulado', 'pedido_id', 'orden_compra_cliente', 'sucursal_id', 'sat_impuesto_id',
        'sat_forma_pago_id', 'sat_metodo_pago_id', 'sat_tipo_comprobante_id', 'sat_uso_id', 'sat_tipo_relacion_id', 'cfdi_relacionado_uuid',
        'sat_comercio_exterior_pedimento_id', 'sat_comercio_exterior_incoterm_id', 'sat_comercio_exterior_tipo_operacion_id', 'confirmado', 'anulado',
    ];
}
