<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SatTipoFactorCatalogo;

class SatTipoFactorCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SatTipoFactorCatalogo::create([
            'nombre' => 'Tasa',
            'activo' => '1',
        ]);

        SatTipoFactorCatalogo::create([
            'nombre' => 'Cuota',
            'activo' => '1',
        ]);

        SatTipoFactorCatalogo::create([
            'nombre' => 'Exento',
            'activo' => '1',
        ]);
    }
}
