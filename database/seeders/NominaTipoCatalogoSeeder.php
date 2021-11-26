<?php

namespace Database\Seeders;

use App\Models\NominaTipoCatalogo;
use Illuminate\Database\Seeder;

class NominaTipoCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NominaTipoCatalogo::create([
            'id' => 'CONFIA',
            'nombre' => 'Confianza',
            'activo' => '1'
        ]);

        NominaTipoCatalogo::create([
            'id' => 'OUTSOU',
            'nombre' => 'OutSoursing',
            'activo' => '1'
        ]);

        NominaTipoCatalogo::create([
            'id' => 'QUINCE',
            'nombre' => 'Quincenal',
            'activo' => '1'
        ]);

        NominaTipoCatalogo::create([
            'id' => 'SEMANA',
            'nombre' => 'Semanal',
            'activo' => '1'
        ]);

    }
}
