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
            'id' => 'GEREN',
            'nombre' =>	'Gerente',
            'activo' => '1'
        ]);

        PuestoTipoCatalogo::create([
            'id' => 'OPERA',
            'nombre' =>	'Operativo',
            'activo' => '1'
        ]);

        PuestoTipoCatalogo::create([
            'id' => 'PROTE',
            'nombre' =>	'Profesional o Técnico',
            'activo' => '1'
        ]);

        PuestoTipoCatalogo::create([
            'id' => 'SUPER',
            'nombre' =>	'Supervisor',
            'activo' => '1'
        ]);
    }
}
