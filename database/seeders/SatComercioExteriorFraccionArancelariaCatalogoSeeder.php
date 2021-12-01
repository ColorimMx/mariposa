<?php

namespace Database\Seeders;

Use App\Models\SatComercioExteriorFraccionArancelariaCatalogo;
use Illuminate\Database\Seeder;

class SatComercioExteriorFraccionArancelariaCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SatComercioExteriorFraccionArancelariaCatalogo::create([
            'id' => '3212909999',
            'nombre' => 'Los demás',
            'activo' => 	'1',
        ]);

        SatComercioExteriorFraccionArancelariaCatalogo::create([
            'id' => '8479901899',
            'nombre' => 'Los demás',
            'activo' => 	'1',
        ]);
    }
}
