<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mba3FacturaDetalle;
use App\Models\ClienteFacturaDetalle;

class ClienteFacturaDetalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mbaFacturaDetalles = new Mba3FacturaDetalle();
        $facturaDetalles = $mbaFacturaDetalles->get_facturas_detalle();

        foreach ($facturaDetalles as $facturaDetalle){
            ClienteFacturaDetalle::create([
                'id' => $facturaDetalle->id,
                'factura_id' => $facturaDetalle->factura_id,
                'linea' => $facturaDetalle->linea,
                'producto_id' => $facturaDetalle->producto_id,
                'cantidad' => $facturaDetalle->cantidad,
                'precio' => $facturaDetalle->precio,
                'subtotal' => $facturaDetalle->subtotal,
                'iva' => $facturaDetalle->iva,
                'divisa_valor' => $facturaDetalle->divisa_valor,
                'subtotal_mn' => $facturaDetalle->subtotal_mn,
                'iva_mn' => $facturaDetalle->iva_mn
            ]);
        }

    }
}
