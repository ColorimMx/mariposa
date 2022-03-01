<?php

namespace Database\Seeders;

use App\Models\SatComercioExteriorPedimentoCatalogo;
use Illuminate\Database\Seeder;

class SatComercioExteriorPedimentoCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SatComercioExteriorPedimentoCatalogo::create([
            'id' => 'A1',
            'nombre' =>	'Importación o Exportación Definitiva',
            'activo' => '1'
        ]);
    }
}
