<?php

namespace Database\Seeders;

use App\Models\SatTipoComprobanteCatalogo;
use Illuminate\Database\Seeder;

class SatTipoComprobanteCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SatTipoComprobanteCatalogo::create([
            'id' => 'I',
            'nombre' => 'Ingreso',
            'activo' => '1',
        ]);
        SatTipoComprobanteCatalogo::create([
            'id' => 'E',
            'nombre' => 'Egreso',
            'activo' => '1',
        ]);
        SatTipoComprobanteCatalogo::create([
            'id' => 'T',
            'nombre' => 'Traslado',
            'activo' => '1',
        ]);
        SatTipoComprobanteCatalogo::create([
            'id' => 'N',
            'nombre' => 'Nómina',
            'activo' => '1',
        ]);
        SatTipoComprobanteCatalogo::create([
            'id' => 'P',
            'nombre' => 'Pago',
            'activo' => '1',
        ]);
    }
}
