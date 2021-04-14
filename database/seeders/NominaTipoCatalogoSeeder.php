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
        ]);

        NominaTipoCatalogo::create([
            'id' => 'OUTSOU',
            'nombre' => 'OutSoursing',
        ]);

        NominaTipoCatalogo::create([
            'id' => 'QUINCE',
            'nombre' => 'Quincenal',
        ]);

        NominaTipoCatalogo::create([
            'id' => 'SEMANA',
            'nombre' => 'Semanal',
        ]);

    }
}
