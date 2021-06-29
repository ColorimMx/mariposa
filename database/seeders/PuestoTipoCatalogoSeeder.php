<?php

namespace Database\Seeders;

use App\Models\PuestoTipoCatalogo;
use Illuminate\Database\Seeder;

class PuestoTipoCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PuestoTipoCatalogo::create([
            'id' => 	'GEREN',
            'nombre' =>	'Gerente',
        ]);

        PuestoTipoCatalogo::create([
            'id' => 	'OPERA',
            'nombre' =>	'Operativo',
        ]);

        PuestoTipoCatalogo::create([
            'id' => 	'PROTE',
            'nombre' =>	'Profesional o Técnico',
        ]);

        PuestoTipoCatalogo::create([
            'id' => 	'SUPER',
            'nombre' =>	'Supervisor',
        ]);
    }
}
