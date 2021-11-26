<?php

namespace Database\Seeders;

use App\Models\PersonalTipoCatalogo;
use Illuminate\Database\Seeder;

class PersonalTipoCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PersonalTipoCatalogo::create([
            'id' => 'CONFI',
            'nombre' => 'Confianza',
            'activo' => '1'
        ]);

        PersonalTipoCatalogo::create([
            'id' => 'NINGU',
            'nombre' => 'Ninguno',
            'activo' => '1'
        ]);

        PersonalTipoCatalogo::create([
            'id' => 'SINDI',
            'nombre' => 'Sindicalizado',
            'activo' => '1'
        ]);
    }
}
