<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UnidadMedidaCatalogo;

class UnidadMedidaCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UnidadMedidaCatalogo::create([
           'id' => 'KG',
           'nombre' => 'Kilogramos',
            'sat_unidad_id' => 'KGM',
            'activo' => '1'
        ]);

        UnidadMedidaCatalogo::create([
            'id' => 'LT',
            'nombre' => 'Litros',
            'sat_unidad_id' => 'LTR',
            'activo' => '1'
        ]);

        UnidadMedidaCatalogo::create([
            'id' => 'MT',
            'nombre' => 'Metros',
            'sat_unidad_id' => 'MTR',
            'activo' => '1'
        ]);

        UnidadMedidaCatalogo::create([
            'id' => 'PZ',
            'nombre' => 'Piezas',
            'sat_unidad_id' => 'H87',
            'activo' => '1'
        ]);

        UnidadMedidaCatalogo::create([
            'id' => 'VR',
            'nombre' => 'Varios',
            'sat_unidad_id' => 'E48',
            'activo' => '1'
        ]);

        UnidadMedidaCatalogo::create([
            'id' => 'AC ',
            'nombre' => 'Actividad',
            'sat_unidad_id' => 'ACT',
            'activo' => '1'
        ]);
    }
}
