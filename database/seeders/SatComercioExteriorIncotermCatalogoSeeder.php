<?php

namespace Database\Seeders;

use App\Models\SatComercioExteriorIncotermCatalogo;
use Illuminate\Database\Seeder;

class SatComercioExteriorIncotermCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SatComercioExteriorIncotermCatalogo::create([
            'id' => 'CFR',
            'nombre' => 'Coste y flete (puerto de destino convenido).',
            'activo' => 	'1',
        ]);
        SatComercioExteriorIncotermCatalogo::create([
            'id' => 'CIF',
            'nombre' => 'Coste,
     seguro y flete (puerto de destino convenido).',
            'activo' => 	'1',
        ]);
        SatComercioExteriorIncotermCatalogo::create([
            'id' => 'CPT',
            'nombre' => 'Transporte pagado hasta (el lugar de destino convenido).',
            'activo' => 	'1',
        ]);
        SatComercioExteriorIncotermCatalogo::create([
            'id' => 'CIP',
            'nombre' => 'Transporte y seguro pagados hasta (lugar de destino convenido).',
            'activo' => 	'1',
        ]);
        SatComercioExteriorIncotermCatalogo::create([
            'id' => 'DAF',
            'nombre' => 'Entregada en frontera (lugar convenido).',
            'activo' => 	'1',
        ]);
        SatComercioExteriorIncotermCatalogo::create([
            'id' => 'DAP',
            'nombre' => 'Entregada en lugar.',
            'activo' => 	'1',
        ]);
        SatComercioExteriorIncotermCatalogo::create([
            'id' => 'DAT',
            'nombre' => 'Entregada en terminal.',
            'activo' => 	'1',
        ]);
        SatComercioExteriorIncotermCatalogo::create([
            'id' => 'DES',
            'nombre' => 'Entregada sobre buque (puerto de destino convenido).',
            'activo' => 	'1',
        ]);
        SatComercioExteriorIncotermCatalogo::create([
            'id' => 'DEQ',
            'nombre' => 'Entregada en muelle (puerto de destino convenido).',
            'activo' => 	'1',
        ]);
        SatComercioExteriorIncotermCatalogo::create([
            'id' => 'DDU',
            'nombre' => 'Entregada derechos no pagados (lugar de destino convenido).',
            'activo' => 	'1',
        ]);
        SatComercioExteriorIncotermCatalogo::create([
            'id' => 'DDP',
            'nombre' => 'Entregada derechos pagados (lugar de destino convenido).',
            'activo' => 	'1',
        ]);
        SatComercioExteriorIncotermCatalogo::create([
            'id' => 'DPU',
            'nombre' => 'Entregada y descargada en lugar acordado.',
            'activo' => 	'1',
        ]);
        SatComercioExteriorIncotermCatalogo::create([
            'id' => 'EXW',
            'nombre' => 'En fabrica (lugar convenido).',
            'activo' => 	'1',
        ]);
        SatComercioExteriorIncotermCatalogo::create([
            'id' => 'FCA',
            'nombre' => 'Franco transportista (lugar designado).',
            'activo' => 	'1',
        ]);
        SatComercioExteriorIncotermCatalogo::create([
            'id' => 'FAS',
            'nombre' => 'Franco al costado del buque (puerto de carga convenido).',
            'activo' => 	'1',
        ]);
        SatComercioExteriorIncotermCatalogo::create([
            'id' => 'FOB',
            'nombre' => 'Franco a bordo (puerto de carga convenido).',
            'activo' => 	'1',
        ]);
    }
}
