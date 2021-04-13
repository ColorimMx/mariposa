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
        ]);

        PersonalTipoCatalogo::create([
            'id' => 'NINGU',
            'nombre' => 'Ninguno',
        ]);

        PersonalTipoCatalogo::create([
            'id' => 'SINDI',
            'nombre' => 'Sindicalizado',
        ]);
    }
}
