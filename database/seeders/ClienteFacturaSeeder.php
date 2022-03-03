<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mba3FacturaPrincipal;
use App\Models\ClienteFactura;

class ClienteFacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mbafacturas = new Mba3FacturaPrincipal();
        $facturas = $mbafacturas->get_facturas();

        foreach ($facturas as $factura) {
            ClienteFactura::create([
                'id' => $factura->id,
                'numero' => $factura->numero,
                'serie' => $factura->serie,
                'prefijo' => $factura->prefijo,
                'folio' => $factura->folio,
                'tipo' => $factura->tipo,
                'cliente_id' => $factura->cliente_id,
                'fecha' => $factura->fecha,
                'fecha_vencimiento' => $factura->fecha_vencimiento,
                'divisa_valor' => $factura->divisa_valor,
                'moneda_id' => $factura->moneda_id,
                'subtotal' => $factura->subtotal,
                'descuento' => $factura->descuento,
                'impuesto' => $factura->impuesto,
                'total' => $factura->total,
                'pago' => $factura->pago,
                'saldo' => $factura->saldo,
                'condiciones_pago' => $factura->condiciones_pago,
                'dia' => $factura->dia,
                'mes' => $factura->mes,
                'anio' => $factura->anio,
                'info_creacion' => $factura->info_creacion,
                'info_confirmado' => $factura->info_confirmado,
                'info_anulado' => $factura->info_anulado,
                'pedido_id' => $factura->pedido_id,
                //'orden_compra_cliente' => $factura->orden_compra_cliente,
                'sucursal_id' => $factura->sucursal_id,
                //'sat_impuesto_id' => $factura->sat_impuesto_id,
                //'sat_forma_pago_id' => $factura->sat_forma_pago_id,
                //'sat_metodo_pago_id' => $factura->sat_metodo_pago_id,
                //'sat_tipo_comprobante_id' => $factura->sat_tipo_comprobante_id,
                //'sat_uso_id' => $factura->sat_uso_id,
                //'sat_tipo_relacion_id' => $factura->sat_tipo_relacion_id,
                //'cfdi_relacionado_uuid' => $factura->cfdi_relacionado_uuid,
                //'sat_comercio_exterior_pedimento_id' => $factura->sat_comercio_exterior_pedimento_id,
                //'sat_comercio_exterior_incoterm_id' => $factura->sat_comercio_exterior_incoterm_id,
                //'sat_comercio_exterior_tipo_operacion_id' => $factura->sat_comercio_exterior_tipo_operacion_id,
                'confirmado' => $factura->confirmado,
                'anulado' => $factura->anulado
            ]);
    }
    }
}
