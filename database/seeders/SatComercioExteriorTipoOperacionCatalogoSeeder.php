<?php

namespace Database\Seeders;

use App\Models\SatComercioExteriorTipoOperacionCatalogo;
use Illuminate\Database\Seeder;

class SatComercioExteriorTipoOperacionCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SatComercioExteriorTipoOperacionCatalogo::create([
            'id' => '2',
            'nombre' => 'Exportación',
            'activo' => 	'1',
        ]);
    }
}
