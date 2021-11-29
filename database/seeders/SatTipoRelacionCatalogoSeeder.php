<?php

namespace Database\Seeders;

use App\Models\SatTipoRelacionCatalogo;
use Illuminate\Database\Seeder;

class SatTipoRelacionCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SatTipoRelacionCatalogo::create([
            'id' => '01',
            'nombre' => 'Nota de crédito de los documentos relacionados',
            'activo' => '1',
        ]);
        SatTipoRelacionCatalogo::create([
            'id' => '02',
            'nombre' => 'Nota de débito de los documentos relacionados',
            'activo' => '1',
        ]);
        SatTipoRelacionCatalogo::create([
            'id' => '03',
            'nombre' => 'Devolución de mercancía sobre facturas o traslados previos',
            'activo' => '1',
        ]);
        SatTipoRelacionCatalogo::create([
            'id' => '04',
            'nombre' => 'Sustitución de los CFDI previos',
            'activo' => '1',
        ]);
        SatTipoRelacionCatalogo::create([
            'id' => '05',
            'nombre' => 'Traslados de mercancias facturados previamente',
            'activo' => '1',
        ]);
        SatTipoRelacionCatalogo::create([
            'id' => '06',
            'nombre' => 'Factura generada por los traslados previos',
            'activo' => '1',
        ]);
        SatTipoRelacionCatalogo::create([
            'id' => '07',
            'nombre' => 'CFDI por aplicación de anticipo',
            'activo' => '1',
        ]);
        SatTipoRelacionCatalogo::create([
            'id' => '08',
            'nombre' => 'Factura generada por pagos en parcialidades',
            'activo' => '1',
        ]);
        SatTipoRelacionCatalogo::create([
            'id' => '09',
            'nombre' => 'Factura generada por pagos diferidos',
            'activo' => '1',
        ]);
    }
}
