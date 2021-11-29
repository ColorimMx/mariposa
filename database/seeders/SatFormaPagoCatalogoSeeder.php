<?php

namespace Database\Seeders;

use App\Models\SatFormaPagoCatalogo;
use Illuminate\Database\Seeder;

class SatFormaPagoCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SatFormaPagoCatalogo::create([
            'id' => '01',
            'nombre' => 'Efectivo',
            'activo' => '1',
        ]);
        SatFormaPagoCatalogo::create([
            'id' => '02',
            'nombre' => 'Cheque nominativo',
            'activo' => '1',
        ]);
        SatFormaPagoCatalogo::create([
            'id' => '03',
            'nombre' => 'Transferencia electrónica de fondos',
            'activo' => '1',
        ]);
        SatFormaPagoCatalogo::create([
            'id' => '04',
            'nombre' => 'Tarjeta de crédito',
            'activo' => '1',
        ]);
        SatFormaPagoCatalogo::create([
            'id' => '05',
            'nombre' => 'Monedero electrónico',
            'activo' => '1',
        ]);
        SatFormaPagoCatalogo::create([
            'id' => '06',
            'nombre' => 'Dinero electrónico',
            'activo' => '1',
        ]);
        SatFormaPagoCatalogo::create([
            'id' => '08',
            'nombre' => 'Vales de despensa',
            'activo' => '1',
        ]);
        SatFormaPagoCatalogo::create([
            'id' => '12',
            'nombre' => 'Dación en pago',
            'activo' => '1',
        ]);
        SatFormaPagoCatalogo::create([
            'id' => '13',
            'nombre' => 'Pago por subrogación',
            'activo' => '1',
        ]);
        SatFormaPagoCatalogo::create([
            'id' => '14',
            'nombre' => 'Pago por consignación',
            'activo' => '1',
        ]);
        SatFormaPagoCatalogo::create([
            'id' => '15',
            'nombre' => 'Condonación',
            'activo' => '1',
        ]);
        SatFormaPagoCatalogo::create([
            'id' => '17',
            'nombre' => 'Compensación',
            'activo' => '1',
        ]);
        SatFormaPagoCatalogo::create([
            'id' => '23',
            'nombre' => 'Novación',
            'activo' => '1',
        ]);
        SatFormaPagoCatalogo::create([
            'id' => '24',
            'nombre' => 'Confusión',
            'activo' => '1',
        ]);
        SatFormaPagoCatalogo::create([
            'id' => '25',
            'nombre' => 'Remisión de deuda',
            'activo' => '1',
        ]);
        SatFormaPagoCatalogo::create([
            'id' => '26',
            'nombre' => 'Prescripción o caducidad',
            'activo' => '1',
        ]);
        SatFormaPagoCatalogo::create([
            'id' => '27',
            'nombre' => 'A satisfacción del acreedor',
            'activo' => '1',
        ]);
        SatFormaPagoCatalogo::create([
            'id' => '28',
            'nombre' => 'Tarjeta de débito',
            'activo' => '1',
        ]);
        SatFormaPagoCatalogo::create([
            'id' => '29',
            'nombre' => 'Tarjeta de servicios',
            'activo' => '1',
        ]);
        SatFormaPagoCatalogo::create([
            'id' => '30',
            'nombre' => 'Aplicación de anticipos',
            'activo' => '1',
        ]);
        SatFormaPagoCatalogo::create([
            'id' => '31',
            'nombre' => 'Intermediario pagos',
            'activo' => '1',
        ]);
        SatFormaPagoCatalogo::create([
            'id' => '99',
            'nombre' => 'Por definir',
            'activo' => '1',
        ]);
    }
}
